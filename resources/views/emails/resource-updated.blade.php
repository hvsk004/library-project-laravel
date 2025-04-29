@extends('emails.layout')

@section('content')
    <h2 style="font-size: 20px; margin-bottom: 16px;">Resource Updated</h2>

    <p>A resource you've bookmarked has been updated:</p>

    <div style="background-color: #f9fafb; border-radius: 6px; padding: 16px; margin: 16px 0;">
        <h3 style="margin: 0 0 8px 0; color: #111827;">{{ $resource->title }}</h3>
        <p style="margin: 0 0 8px 0; color: #6b7280;">By {{ $resource->author }}</p>
        <p style="margin: 0; color: #374151;">{{ Str::limit($resource->description, 200) }}</p>
    </div>

    <p>The following changes were made:</p>
    <ul style="margin: 16px 0; padding-left: 24px;">
        @foreach($changes as $field => $change)
            <li style="margin-bottom: 8px; color: #374151;">
                <strong>{{ ucfirst($field) }}:</strong> 
                <span style="color: #6b7280;">{{ $change['old'] }}</span> → 
                <span style="color: #111827;">{{ $change['new'] }}</span>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('resources.show', $resource) }}" 
       class="button" 
       style="color: #ffffff; text-decoration: none;">
        View Resource
    </a>
@endsection