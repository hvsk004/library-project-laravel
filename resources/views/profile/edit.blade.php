@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Profile Settings</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <form action="{{ route('profile.update') }}" method="POST" class="p-6">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Change Password</h3>
                <div class="space-y-4">
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                        <input type="password" name="current_password" id="current_password"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input type="password" name="password" id="password"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Profile
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">My Favorite Resources</h2>
            @if(auth()->user()->favorites->count() > 0)
                <div class="space-y-4">
                    @foreach(auth()->user()->favorites as $resource)
                        <div class="flex items-center justify-between border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">{{ $resource->title }}</h3>
                                <p class="text-sm text-gray-500">By {{ $resource->author }}</p>
                                <p class="text-xs text-gray-500">Added to favorites {{ $resource->pivot->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('resources.show', $resource) }}" 
                                   class="text-sm text-indigo-600 hover:text-indigo-900">View</a>
                                <form action="{{ route('resources.unfavorite', $resource) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-sm text-red-600 hover:text-red-900">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">You haven't added any resources to your favorites yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection