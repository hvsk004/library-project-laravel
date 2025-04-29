@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-gray-700">Home</a>
                </li>
                <li>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </li>
                <li>
                    <a href="{{ route('help.index') }}" class="hover:text-gray-700">Help Center</a>
                </li>
                @if(Request::segment(2) && Request::segment(2) != 'index')
                <li>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </li>
                <li>
                    <span class="text-gray-700">@yield('help-title', ucfirst(Request::segment(2)))</span>
                </li>
                @endif
            </ol>
        </nav>

        <div class="bg-white shadow-sm rounded-lg">
            @yield('help-content')
        </div>

        <div class="mt-8 text-center">
            <p class="text-gray-600">
                Can't find what you're looking for? 
                <a href="{{ route('help.contact') }}" class="text-indigo-600 hover:text-indigo-500">Contact our support team</a>
            </p>
        </div>
    </div>
</div>
@endsection