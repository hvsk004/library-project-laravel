@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Notifications</h1>
        @if($unreadNotifications->count() > 0)
            <form action="{{ route('notifications.mark-all-read') }}" method="POST">
                @csrf
                <button type="submit" 
                        class="text-sm text-indigo-600 hover:text-indigo-900">
                    Mark all as read
                </button>
            </form>
        @endif
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        @forelse($notifications as $notification)
            <div class="p-4 {{ $loop->index > 0 ? 'border-t border-gray-200' : '' }} {{ $notification->read_at ? 'bg-white' : 'bg-indigo-50' }}">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center mb-1">
                            @if($notification->type === 'App\Notifications\ResourceUpdated')
                                <svg class="h-5 w-5 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            @elseif($notification->type === 'App\Notifications\NewResourceInCategory')
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            @endif
                            <p class="text-sm font-medium text-gray-900">
                                {{ $notification->data['title'] }}
                            </p>
                        </div>
                        <p class="text-sm text-gray-600">{{ $notification->data['message'] }}</p>
                        <div class="mt-2 text-xs text-gray-500 flex items-center">
                            <span>{{ $notification->created_at->diffForHumans() }}</span>
                            @unless($notification->read_at)
                                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-100 text-indigo-800">
                                    New
                                </span>
                            @endunless
                        </div>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex items-center space-x-4">
                        @if($notification->data['action_url'] ?? false)
                            <a href="{{ $notification->data['action_url'] }}" 
                               class="text-sm text-indigo-600 hover:text-indigo-900">
                                View
                            </a>
                        @endif
                        @unless($notification->read_at)
                            <form action="{{ route('notifications.mark-as-read', $notification) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="text-sm text-gray-600 hover:text-gray-900">
                                    Mark as read
                                </button>
                            </form>
                        @endunless
                    </div>
                </div>
            </div>
        @empty
            <div class="p-6 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
                <p class="mt-4 text-gray-600">No notifications yet.</p>
            </div>
        @endforelse

        @if($notifications->hasPages())
            <div class="px-4 py-3 border-t border-gray-200 bg-gray-50">
                {{ $notifications->links() }}
            </div>
        @endif
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-medium text-gray-900 mb-4">Notification Settings</h2>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <form action="{{ route('notifications.settings.update') }}" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PUT')

                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Resource Updates</h3>
                        <p class="text-sm text-gray-500">Get notified when your favorite resources are updated</p>
                    </div>
                    <label class="flex items-center">
                        <input type="checkbox" name="notify_resource_updates" 
                               {{ auth()->user()->notify_resource_updates ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">New Resources</h3>
                        <p class="text-sm text-gray-500">Get notified when new resources are added in your favorite categories</p>
                    </div>
                    <label class="flex items-center">
                        <input type="checkbox" name="notify_new_resources" 
                               {{ auth()->user()->notify_new_resources ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Email Notifications</h3>
                        <p class="text-sm text-gray-500">Receive notifications via email</p>
                    </div>
                    <label class="flex items-center">
                        <input type="checkbox" name="email_notifications" 
                               {{ auth()->user()->email_notifications ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Notification Preferences
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection