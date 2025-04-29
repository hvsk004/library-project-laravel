@extends('layouts.app')

@section('title', 'Search Resources')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('search') }}" method="GET" class="space-y-4">
            <div class="flex gap-4">
                <div class="flex-1">
                    <label for="q" class="block text-sm font-medium text-gray-700">Search Query</label>
                    <input type="text" name="q" id="q" value="{{ request('q') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="w-48">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category" id="category"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(request('category') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Search
                </button>
            </div>
        </form>
    </div>

    @if(request('q') || request('category'))
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h2 class="text-xl font-semibold">Search Results</h2>
                @if($resources->count() > 0)
                    <p class="text-gray-600">Found {{ $resources->total() }} resources</p>
                @else
                    <p class="text-gray-600">No resources found matching your criteria</p>
                @endif
            </div>
            @if($resources->count() > 0)
                <div class="divide-y">
                    @foreach($resources as $resource)
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="text-sm text-blue-500">{{ $resource->category->name }}</span>
                                    <h3 class="text-xl font-semibold mt-1">{{ $resource->title }}</h3>
                                    <p class="text-gray-600 mt-2">{{ Str::limit($resource->description, 200) }}</p>
                                    <div class="mt-4">
                                        <a href="{{ route('resources.show', $resource) }}" 
                                           class="text-blue-500 hover:text-blue-700">
                                            View Details →
                                        </a>
                                    </div>
                                </div>
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
                        </div>
                    @endforeach
                </div>
                <div class="p-6 border-t">
                    {{ $resources->links() }}
                </div>
            @endif
        </div>
    @endif
</div>
@endsection