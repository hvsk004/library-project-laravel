@extends('layouts.admin')

@section('header')
    Edit Category
@endsection

@section('content')
    <div class="max-w-2xl mx-auto">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <p class="mt-1 text-sm text-gray-500">Current slug: {{ $category->slug }}</p>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.categories.index') }}" 
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Category
                </button>
            </div>
        </form>

        <div class="mt-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Resources in this category</h3>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                @if($category->resources->count() > 0)
                    <ul class="divide-y divide-gray-200">
                        @foreach($category->resources as $resource)
                            <li class="px-6 py-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">{{ $resource->title }}</h4>
                                        <p class="text-sm text-gray-500">By {{ $resource->author }}</p>
                                    </div>
                                    <a href="{{ route('admin.resources.edit', $resource) }}" 
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="p-6 text-gray-500">No resources in this category yet.</p>
                @endif
            </div>
        </div>
    </div>
@endsection