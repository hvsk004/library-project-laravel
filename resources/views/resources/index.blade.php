@extends('layouts.app')

@section('title', 'All Resources')

@section('content')
<div class="space-y-6">
    <h1 class="text-3xl font-bold">All Resources</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($resources as $resource)
            <div class="bg-white rounded-lg shadow">
                <div class="p-6">
                    <div class="flex justify-between">
                        <span class="text-sm text-blue-500">{{ $resource->category->name }}</span>
                        @auth
                            <form action="{{ route('resources.favorite', $resource) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-gray-400 hover:text-yellow-500">
                                    <svg class="w-6 h-6 {{ auth()->user()->favoriteResources->contains($resource) ? 'text-yellow-500' : '' }}"
                                         fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </button>
                            </form>
                        @endauth
                    </div>
                    <h3 class="text-xl font-semibold mt-2">{{ $resource->title }}</h3>
                    <p class="text-gray-600 mt-2">{{ Str::limit($resource->description, 150) }}</p>
                    <div class="mt-4">
                        <a href="{{ route('resources.show', $resource) }}" 
                           class="inline-flex items-center text-blue-500 hover:text-blue-700">
                            View Details
                            <svg class="w-4 h-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $resources->links() }}
    </div>
</div>
@endsection