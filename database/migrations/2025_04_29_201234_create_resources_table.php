<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('isbn', 13);
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->date('published_at');
            $table->string('cover_image')->nullable();
            $table->timestamps();

            // Only add fulltext index in non-testing environment
            if (!app()->environment('testing')) {
                $table->fullText(['title', 'author', 'description']);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
