@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="space-y-8">
    <section>
        <h1 class="text-4xl font-bold mb-6">Welcome to the Library</h1>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-lg text-gray-600">Explore our collection of resources across various categories.</p>
        </div>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4">Featured Resources</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredResources as $resource)
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <span class="text-sm text-blue-500">{{ $resource->category->name }}</span>
                        <h3 class="text-xl font-semibold mt-2">{{ $resource->title }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($resource->description, 100) }}</p>
                        <a href="{{ route('resources.show', $resource) }}" class="inline-block mt-4 text-blue-500 hover:text-blue-700">
                            Learn more →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4">Browse Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($categories as $category)
                <a href="{{ route('search', ['category' => $category->id]) }}" 
                   class="bg-white rounded-lg shadow p-4 hover:shadow-md transition">
                    <h3 class="font-semibold">{{ $category->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $category->resources_count }} resources</p>
                </a>
            @endforeach
        </div>
    </section>
</div>
@endsection