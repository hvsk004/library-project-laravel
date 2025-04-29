@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-bold mb-6">Help Center</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('help.faq') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">FAQ</h2>
                    <p class="text-gray-600">Find answers to frequently asked questions</p>
                </a>

                <a href="{{ route('help.search') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Search Help</h2>
                    <p class="text-gray-600">Learn how to search for resources effectively</p>
                </a>

                <a href="{{ route('help.favorites') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Managing Favorites</h2>
                    <p class="text-gray-600">How to save and organize your favorite resources</p>
                </a>

                <a href="{{ route('help.notifications') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Notifications</h2>
                    <p class="text-gray-600">Understanding and managing your notifications</p>
                </a>

                <a href="{{ route('help.account') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Account Settings</h2>
                    <p class="text-gray-600">Managing your account and profile settings</p>
                </a>

                <a href="{{ route('help.contact') }}" class="block p-6 bg-gray-50 hover:bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Contact Support</h2>
                    <p class="text-gray-600">Get in touch with our support team</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection