<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');
    }

    private function createAdminUser()
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function createRegularUser()
    {
        return User::factory()->create(['role' => 'user']);
    }

    public function test_non_admin_cannot_access_admin_dashboard(): void
    {
        $user = $this->createRegularUser();

        $response = $this->actingAs($user)->get('/admin');
        $response->assertRedirect('/');
    }

    public function test_admin_can_access_admin_dashboard(): void
    {
        $admin = $this->createAdminUser();

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertStatus(200);
    }

    public function test_admin_can_create_category(): void
    {
        $admin = $this->createAdminUser();

        $response = $this->actingAs($admin)->post('/admin/categories', [
            'name' => 'Test Category',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('categories', [
            'name' => 'Test Category',
            'slug' => 'test-category',
        ]);
    }

    public function test_admin_can_create_resource(): void
    {
        $admin = $this->createAdminUser();
        $category = Category::factory()->create();

        $response = $this->actingAs($admin)->post('/admin/resources', [
            'title' => 'Test Resource',
            'author' => 'Test Author',
            'isbn' => '1234567890123',
            'description' => 'Test Description',
            'category_id' => $category->id,
            'published_at' => '2024-01-01',
            'cover_image' => UploadedFile::fake()->image('cover.jpg'),
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('resources', [
            'title' => 'Test Resource',
            'author' => 'Test Author',
        ]);
        $this->assertNotNull(Resource::first()->cover_image);
    }

    public function test_admin_can_edit_user(): void
    {
        $admin = $this->createAdminUser();
        $user = $this->createRegularUser();

        $response = $this->actingAs($admin)->put("/admin/users/{$user->id}", [
            'name' => 'Updated Name',
            'email' => $user->email,
            'role' => 'user',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
        ]);
    }

    public function test_admin_can_delete_resource(): void
    {
        $admin = $this->createAdminUser();
        $category = Category::factory()->create();
        $resource = Resource::factory()->create([
            'category_id' => $category->id,
            'cover_image' => 'covers/test.jpg',
        ]);

        Storage::disk('public')->put('covers/test.jpg', 'test content');

        $response = $this->actingAs($admin)->delete("/admin/resources/{$resource->id}");

        $response->assertRedirect();
        $this->assertDatabaseMissing('resources', ['id' => $resource->id]);
        Storage::disk('public')->assertMissing('covers/test.jpg');
    }
}
