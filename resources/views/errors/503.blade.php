@extends('errors.layout')

@section('code', '503')
@section('title', 'Under Maintenance')
@section('message', 'We\'ll be back soon!')
@section('submessage', 'We\'re currently performing scheduled maintenance. Please check back in a few minutes.')

@section('actions')
    <button onclick="window.location.reload()" 
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Check Again
    </button>
@endsection