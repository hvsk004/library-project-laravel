<?php

namespace Tests\Unit;

use App\Models\Resource;
use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_full_text_search_returns_matching_results(): void
    {
        $category = Category::factory()->create();
        $matchingResource = Resource::factory()->create([
            'title' => 'PHP Programming',
            'author' => 'John Doe',
            'description' => 'A guide to PHP programming',
            'category_id' => $category->id,
        ]);

        $nonMatchingResource = Resource::factory()->create([
            'title' => 'Python Basics',
            'author' => 'Jane Smith',
            'description' => 'Learn Python programming',
            'category_id' => $category->id,
        ]);

        $results = Resource::search('PHP')->get();

        $this->assertTrue($results->contains($matchingResource));
        $this->assertFalse($results->contains($nonMatchingResource));
    }

    public function test_resource_belongs_to_category(): void
    {
        $category = Category::factory()->create();
        $resource = Resource::factory()->create([
            'category_id' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $resource->category);
        $this->assertEquals($category->id, $resource->category->id);
    }

    public function test_search_filters_work_together(): void
    {
        $category = Category::factory()->create();
        $matchingResource = Resource::factory()->create([
            'title' => 'PHP Programming',
            'author' => 'John Doe',
            'category_id' => $category->id,
            'published_at' => '2024-01-01',
        ]);

        $results = Resource::search('PHP')
            ->where('category_id', $category->id)
            ->where('author', 'like', '%John%')
            ->where('published_at', '>=', '2024-01-01')
            ->get();

        $this->assertTrue($results->contains($matchingResource));
        $this->assertEquals(1, $results->count());
    }
}
