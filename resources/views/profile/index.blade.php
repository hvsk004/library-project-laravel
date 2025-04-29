@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="border-b border-gray-200 pb-5">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9">Profile</h2>
            </div>

            @if (session('success'))
                <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-6">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-900">{{ $user->name }}</h3>
                    <p class="text-gray-500">{{ $user->email }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Edit Profile
                    </a>
                </div>

                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Favorite Resources</h3>
                    @if($favoriteResources->count() > 0)
                        <div class="space-y-4">
                            @foreach($favoriteResources as $resource)
                                <div class="bg-gray-50 px-4 py-3 rounded-lg">
                                    <a href="{{ route('resources.show', $resource) }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
                                        {{ $resource->title }}
                                    </a>
                                    <p class="text-gray-500 text-sm mt-1">{{ $resource->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No favorite resources yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection