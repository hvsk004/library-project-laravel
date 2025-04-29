@extends('layouts.admin')

@section('header')
    Dashboard
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-900">Total Resources</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ $metrics['total_resources'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-900">Total Users</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ $metrics['total_users'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-900">Total Categories</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ $metrics['total_categories'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-900">Recent Activities</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ count($metrics['recent_resources']) }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Resources</h3>
                <div class="space-y-4">
                    @foreach($metrics['recent_resources'] as $resource)
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">{{ $resource->title }}</h4>
                                <p class="text-sm text-gray-500">Added {{ $resource->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('admin.resources.edit', $resource) }}" 
                               class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.resources.index') }}" 
                       class="text-sm text-indigo-600 hover:text-indigo-900">View all resources →</a>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Users</h3>
                <div class="space-y-4">
                    @foreach($metrics['recent_users'] as $user)
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">{{ $user->name }}</h4>
                                <p class="text-sm text-gray-500">Joined {{ $user->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('admin.users.edit', $user) }}" 
                               class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.users.index') }}" 
                       class="text-sm text-indigo-600 hover:text-indigo-900">View all users →</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 bg-white rounded-lg shadow">
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="{{ route('admin.resources.create') }}" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Add New Resource
                </a>
                <a href="{{ route('admin.categories.create') }}" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Add New Category
                </a>
                <a href="{{ route('admin.users.create') }}" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Add New User
                </a>
                <a href="{{ route('search') }}" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    View Public Search
                </a>
            </div>
        </div>
    </div>
@endsection