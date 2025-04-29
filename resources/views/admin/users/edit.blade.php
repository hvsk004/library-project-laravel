@extends('layouts.admin')

@section('header')
    Edit User
@endsection

@section('content')
    <div class="max-w-2xl mx-auto">
        <form action="{{ route('admin.users.update', $user) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="password" id="password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <p class="mt-1 text-sm text-gray-500">Leave empty to keep current password</p>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            @if($user->id !== auth()->id())
                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_admin" {{ $user->is_admin ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <span class="ml-2 text-sm text-gray-600">Administrator privileges</span>
                    </label>
                </div>
            @endif

            <div class="mt-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4">User Activity</h3>
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Member since</p>
                            <p class="text-sm font-medium text-gray-900">{{ $user->created_at->format('F j, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Last login</p>
                            <p class="text-sm font-medium text-gray-900">
                                {{ $user->last_login_at ? $user->last_login_at->format('F j, Y H:i') : 'Never' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Favorite Resources</h3>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    @if($user->favoriteResources->count() > 0)
                        <ul class="divide-y divide-gray-200">
                            @foreach($user->favoriteResources as $resource)
                                <li class="px-4 py-3">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">{{ $resource->title }}</p>
                                            <p class="text-sm text-gray-500">Added to favorites: {{ $resource->pivot->created_at->format('F j, Y') }}</p>
                                        </div>
                                        <a href="{{ route('admin.resources.edit', $resource) }}" 
                                           class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="p-4 text-sm text-gray-500">No favorite resources yet.</p>
                    @endif
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <a href="{{ route('admin.users.index') }}" 
                   class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update User
                </button>
            </div>
        </form>
    </div>
@endsection