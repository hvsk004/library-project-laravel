@extends('layouts.admin')

@section('header')
    Edit Resource
@endsection

@section('content')
    <div class="max-w-2xl mx-auto">
        <form action="{{ route('admin.resources.update', $resource) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $resource->title) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" value="{{ old('author', $resource->author) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="isbn" class="block text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $resource->isbn) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $resource->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description', $resource->description) }}</textarea>
            </div>

            <div class="mb-6">
                <label for="published_at" class="block text-sm font-medium text-gray-700">Publication Date</label>
                <input type="date" name="published_at" id="published_at" 
                       value="{{ old('published_at', $resource->published_at ? $resource->published_at->format('Y-m-d') : '') }}"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="cover_image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                @if($resource->cover_image)
                    <div class="mt-2 mb-4">
                        <img src="{{ asset('storage/' . $resource->cover_image) }}" 
                             alt="Current cover image"
                             class="w-32 h-32 object-cover rounded-lg">
                    </div>
                @endif
                <input type="file" name="cover_image" id="cover_image" accept="image/*"
                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                <p class="mt-1 text-sm text-gray-500">Leave empty to keep the current image. PNG, JPG, GIF up to 2MB</p>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.resources.index') }}" 
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Resource
                </button>
            </div>
        </form>
    </div>
@endsection