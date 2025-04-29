@extends('help.layout')

@section('help-content')
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h1>

    <div class="space-y-6">
        <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
            <button @click="open = !open" class="flex w-full items-center justify-between text-left">
                <h3 class="text-lg font-medium text-gray-900">How do I create an account?</h3>
                <span class="ml-6 flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-500" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    <svg class="h-5 w-5 text-gray-500" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"/>
                    </svg>
                </span>
            </button>
            <div x-show="open" class="mt-2 prose" style="display: none;">
                <p>Click the 'Register' link in the top navigation bar. Fill out the registration form with your name, email address, and password. Once submitted, you'll receive a confirmation email to verify your account.</p>
            </div>
        </div>

        <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
            <button @click="open = !open" class="flex w-full items-center justify-between text-left">
                <h3 class="text-lg font-medium text-gray-900">How do I search for resources?</h3>
                <span class="ml-6 flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-500" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    <svg class="h-5 w-5 text-gray-500" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"/>
                    </svg>
                </span>
            </button>
            <div x-show="open" class="mt-2 prose" style="display: none;">
                <p>Use the search bar at the top of any page to search by title, author, or keywords. You can also browse resources by category or use the advanced search filters to narrow down your results.</p>
            </div>
        </div>

        <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
            <button @click="open = !open" class="flex w-full items-center justify-between text-left">
                <h3 class="text-lg font-medium text-gray-900">How do I save a resource to my favorites?</h3>
                <span class="ml-6 flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-500" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    <svg class="h-5 w-5 text-gray-500" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"/>
                    </svg>
                </span>
            </button>
            <div x-show="open" class="mt-2 prose" style="display: none;">
                <p>When viewing a resource, click the 'Add to Favorites' button. The resource will be saved to your favorites list, which you can access from your profile. You must be logged in to use this feature.</p>
            </div>
        </div>

        <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
            <button @click="open = !open" class="flex w-full items-center justify-between text-left">
                <h3 class="text-lg font-medium text-gray-900">How do notifications work?</h3>
                <span class="ml-6 flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-500" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    <svg class="h-5 w-5 text-gray-500" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"/>
                    </svg>
                </span>
            </button>
            <div x-show="open" class="mt-2 prose" style="display: none;">
                <p>You can receive notifications when your favorite resources are updated or when new resources are added in categories you follow. Manage your notification preferences in your profile settings.</p>
            </div>
        </div>

        <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
            <button @click="open = !open" class="flex w-full items-center justify-between text-left">
                <h3 class="text-lg font-medium text-gray-900">What should I do if I forget my password?</h3>
                <span class="ml-6 flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-500" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    <svg class="h-5 w-5 text-gray-500" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"/>
                    </svg>
                </span>
            </button>
            <div x-show="open" class="mt-2 prose" style="display: none;">
                <p>Click the 'Forgot Password' link on the login page. Enter your email address, and we'll send you instructions to reset your password.</p>
            </div>
        </div>
    </div>

    <div class="mt-8 rounded-md bg-gray-50 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-gray-800">Can't find what you're looking for?</h3>
                <div class="mt-2 text-sm text-gray-600">
                    <p>Contact our support team for additional help.</p>
                    <a href="{{ route('help.contact') }}" class="mt-2 inline-flex items-center text-indigo-600 hover:text-indigo-500">
                        Contact Support
                        <svg class="ml-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection