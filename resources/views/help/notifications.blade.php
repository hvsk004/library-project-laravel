@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-bold mb-6">Notifications Help</h1>

            <div class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold mb-3">Understanding Notifications</h2>
                    <p class="text-gray-600">Our notification system keeps you informed about important updates and activities related to your library resources.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-3">Types of Notifications</h2>
                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                        <li>New resources in your favorite categories</li>
                        <li>Updates to resources you've bookmarked</li>
                        <li>System announcements and updates</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-3">Managing Your Notifications</h2>
                    <ol class="list-decimal pl-5 space-y-2 text-gray-600">
                        <li>Go to your profile settings</li>
                        <li>Click on "Notification Preferences"</li>
                        <li>Choose which notifications you want to receive</li>
                        <li>Select your preferred notification method (email and/or in-app)</li>
                    </ol>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-3">Need More Help?</h2>
                    <p class="text-gray-600">If you have any questions about notifications, please visit our <a href="{{ route('help.faq') }}" class="text-indigo-600 hover:text-indigo-900">FAQ</a> or <a href="{{ route('help.contact') }}" class="text-indigo-600 hover:text-indigo-900">contact us</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection