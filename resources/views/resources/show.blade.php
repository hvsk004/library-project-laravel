@extends('layouts.app')

@section('title', $resource->title)

@section('content')
<div class="space-y-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-start">
            <div>
                <span class="text-sm text-blue-500">{{ $resource->category->name }}</span>
                <h1 class="text-3xl font-bold mt-2">{{ $resource->title }}</h1>
            </div>
            @auth
                <form action="{{ route('resources.favorite', $resource) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-yellow-500">
                        <svg class="w-8 h-8 {{ auth()->user()->favoriteResources->contains($resource) ? 'text-yellow-500' : '' }}"
                             fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </button>
                </form>
            @endauth
        </div>

        <div class="mt-6 prose max-w-none">
            <p class="text-gray-600">{{ $resource->description }}</p>
        </div>

        @if($resource->keywords)
            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">Keywords</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(explode(',', $resource->keywords) as $keyword)
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">
                            {{ trim($keyword) }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        @if($resource->url)
            <div class="mt-6">
                <a href="{{ $resource->url }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Visit Resource
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                    </svg>
                </a>
            </div>
        @endif
    </div>

    @if($related->count() > 0)
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Related Resources</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($related as $relatedResource)
                    <div class="bg-white rounded-lg shadow p-6">
                        <span class="text-sm text-blue-500">{{ $relatedResource->category->name }}</span>
                        <h3 class="text-xl font-semibold mt-2">{{ $relatedResource->title }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($relatedResource->description, 100) }}</p>
                        <a href="{{ route('resources.show', $relatedResource) }}" 
                           class="inline-block mt-4 text-blue-500 hover:text-blue-700">
                            Learn more →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection