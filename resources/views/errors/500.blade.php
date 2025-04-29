@extends('errors.layout')

@section('code', '500')
@section('title', 'Server Error')
@section('message', 'Oops! Something went wrong on our end.')
@section('submessage', 'We\'re working on fixing this. Please try again later.')

@section('actions')
    <a href="{{ route('home') }}" 
       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
        Return Home
    </a>
    <button onclick="window.location.reload()" 
            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Try Again
    </button>
@endsection