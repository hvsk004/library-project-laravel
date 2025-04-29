@extends('emails.layout')

@section('content')
    <h2 style="font-size: 20px; margin-bottom: 16px;">New Resource Available</h2>

    <p>A new resource has been added in the category "{{ $resource->category->name }}":</p>

    <div style="background-color: #f9fafb; border-radius: 6px; padding: 16px; margin: 16px 0;">
        <h3 style="margin: 0 0 8px 0; color: #111827;">{{ $resource->title }}</h3>
        <p style="margin: 0 0 8px 0; color: #6b7280;">By {{ $resource->author }}</p>
        <p style="margin: 0; color: #374151;">{{ Str::limit($resource->description, 200) }}</p>
        
        @if($resource->published_at)
            <p style="margin: 8px 0 0 0; color: #6b7280;">Published: {{ $resource->published_at->format('F j, Y') }}</p>
        @endif
    </div>

    <p style="margin-bottom: 24px;">You're receiving this notification because you're following the {{ $resource->category->name }} category.</p>

    <div style="text-align: center;">
        <a href="{{ route('resources.show', $resource) }}" 
           class="button" 
           style="color: #ffffff; text-decoration: none;">
            View Resource
        </a>
    </div>

    <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #e5e7eb;">
        <p style="color: #6b7280; font-size: 14px;">
            Want to discover more resources? Browse our 
            <a href="{{ route('search') }}" style="color: #4f46e5; text-decoration: none;">complete collection</a>.
        </p>
    </div>
@endsection