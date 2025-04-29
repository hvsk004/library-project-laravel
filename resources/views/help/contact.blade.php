@extends('help.layout')

@section('help-content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Contact Support</h1>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <form action="{{ route('help.contact.send') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <select id="subject" name="subject" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select a topic</option>
                        <option value="account">Account Issues</option>
                        <option value="search">Search Help</option>
                        <option value="resources">Resource Access</option>
                        <option value="technical">Technical Problems</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="6" required
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              placeholder="Describe your issue or question..."></textarea>
                    <p class="mt-1 text-sm text-gray-500">
                        Please provide as much detail as possible to help us assist you better.
                    </p>
                </div>

                @guest
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                            <input type="text" id="name" name="name" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>
                @endguest

                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <input id="urgent" name="urgent" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="ml-3">
                        <label for="urgent" class="text-sm text-gray-600">This is an urgent issue that requires immediate attention</label>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="rounded-lg bg-gray-50 p-6">
                <h3 class="text-lg font-medium text-gray-900">Quick Response Time</h3>
                <p class="mt-2 text-sm text-gray-500">
                    We typically respond to support requests within 24 hours during business days.
                </p>
            </div>

            <div class="rounded-lg bg-gray-50 p-6">
                <h3 class="text-lg font-medium text-gray-900">Check FAQ First</h3>
                <p class="mt-2 text-sm text-gray-500">
                    You might find an immediate answer to your question in our 
                    <a href="{{ route('help.faq') }}" class="text-indigo-600 hover:text-indigo-500">FAQ section</a>.
                </p>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-200 pt-6">
            <h2 class="text-lg font-medium text-gray-900">Other Ways to Get Help</h2>
            <div class="mt-4 space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="ml-3 text-sm">
                        <p class="text-gray-900">Email Support</p>
                        <p class="mt-1 text-gray-500">Send us an email at <a href="mailto:support@example.com" class="text-indigo-600 hover:text-indigo-500">support@example.com</a></p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3 text-sm">
                        <p class="text-gray-900">Support Hours</p>
                        <p class="mt-1 text-gray-500">Monday to Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection