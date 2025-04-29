@extends('help.layout')

@section('help-title', 'Account Management')

@section('help-content')
<div class="px-6 py-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Managing Your Library Account</h1>
    
    <div class="space-y-8">
        <section>
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Account Settings</h2>
            <div class="prose prose-indigo max-w-none">
                <p>You can manage your account settings by clicking on your profile picture in the top right corner and selecting "Settings". From there, you can:</p>
                <ul>
                    <li>Update your personal information</li>
                    <li>Change your password</li>
                    <li>Manage email notifications</li>
                    <li>Update your profile picture</li>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Library Card & Borrowing</h2>
            <div class="prose prose-indigo max-w-none">
                <p>Your library account is linked to your digital library card. Here's what you need to know:</p>
                <ul>
                    <li>Your digital library card number is displayed in your profile</li>
                    <li>You can borrow up to 5 resources at a time</li>
                    <li>The standard borrowing period is 14 days</li>
                    <li>You can renew items up to 2 times if no one else has requested them</li>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Privacy & Security</h2>
            <div class="prose prose-indigo max-w-none">
                <p>We take your privacy and security seriously. Here are some tips to keep your account secure:</p>
                <ul>
                    <li>Use a strong, unique password</li>
                    <li>Never share your account credentials</li>
                    <li>Log out when using shared computers</li>
                    <li>Review your borrowing history regularly</li>
                </ul>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Need More Help?</h2>
            <div class="prose prose-indigo max-w-none">
                <p>If you're experiencing issues with your account:</p>
                <ul>
                    <li>Check our <a href="{{ route('help.faq') }}" class="text-indigo-600 hover:text-indigo-500">FAQ page</a></li>
                    <li>Visit the library help desk during operating hours</li>
                    <li>Contact our support team through the <a href="{{ route('help.contact') }}" class="text-indigo-600 hover:text-indigo-500">help form</a></li>
                </ul>
            </div>
        </section>
    </div>
</div>
@endsection