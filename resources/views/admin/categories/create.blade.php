@extends('layouts.admin')

@section('header')
    Add New Category
@endsection

@section('content')
    <div class="max-w-2xl mx-auto">
        <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <p class="mt-1 text-sm text-gray-500">The slug will be automatically generated from the name.</p>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.categories.index') }}" 
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Category
                </button>
            </div>
        </form>
    </div>
@endsection