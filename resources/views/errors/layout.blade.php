@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center">
    <div class="text-center">
        <h1 class="text-9xl font-bold text-gray-200">@yield('code')</h1>
        <p class="mt-4 text-2xl font-semibold text-gray-600">@yield('title')</p>
        <p class="mt-2 text-gray-500">@yield('message')</p>
        @hasSection('submessage')
            <p class="mt-1 text-sm text-gray-500">@yield('submessage')</p>
        @endif
        <div class="mt-6">
            @hasSection('actions')
                @yield('actions')
            @else
                <a href="{{ url()->previous() }}" 
                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
                    Go Back
                </a>
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Return Home
                </a>
            @endif
        </div>
    </div>
</div>
@endsection