@extends('emails.layout')

@section('content')
    <h2 style="font-size: 20px; margin-bottom: 16px;">Welcome to {{ config('app.name') }}!</h2>

    <p>Hi {{ $user->name }},</p>

    <p>Thank you for joining our library system. We're excited to help you discover and manage resources that interest you.</p>

    <div style="background-color: #f9fafb; border-radius: 6px; padding: 16px; margin: 24px 0;">
        <h3 style="margin: 0 0 16px 0; color: #111827;">Getting Started</h3>
        <ul style="margin: 0; padding-left: 24px; color: #374151;">
            <li style="margin-bottom: 12px;">Browse our collection of resources</li>
            <li style="margin-bottom: 12px;">Add interesting items to your favorites</li>
            <li style="margin-bottom: 12px;">Set up notifications for categories you're interested in</li>
            <li style="margin-bottom: 0;">Customize your profile settings</li>
        </ul>
    </div>

    <div style="text-align: center; margin: 24px 0;">
        <a href="{{ route('home') }}" 
           class="button" 
           style="color: #ffffff; text-decoration: none;">
            Start Exploring
        </a>
    </div>

    <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #e5e7eb;">
        <p style="color: #6b7280; font-size: 14px;">
            Need help getting started? Check out our 
            <a href="{{ route('help.index') }}" style="color: #4f46e5; text-decoration: none;">help section</a>
            or contact our support team.
        </p>
    </div>
@endsection