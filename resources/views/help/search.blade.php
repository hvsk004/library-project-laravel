@extends('help.layout')

@section('help-content')
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Searching Resources</h1>

    <div class="prose max-w-none">
        <h2>Basic Search</h2>
        <p>Use the search bar at the top of any page to quickly find resources. You can search by:</p>
        <ul>
            <li>Title</li>
            <li>Author</li>
            <li>ISBN</li>
            <li>Keywords in the description</li>
        </ul>

        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
            <h3 class="text-sm font-medium text-gray-900">Example Searches</h3>
            <ul class="mt-2 text-sm text-gray-600">
                <li>"Programming in Python"</li>
                <li>"John Smith" (author)</li>
                <li>978-0-123456-78-9 (ISBN)</li>
            </ul>
        </div>

        <h2>Advanced Search</h2>
        <p>Use the advanced search filters to narrow down your results:</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 not-prose my-4">
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 mb-2">By Category</h3>
                <p class="text-gray-600">Filter resources by specific categories or browse all resources within a category.</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 mb-2">By Date</h3>
                <p class="text-gray-600">Find resources published within a specific time period or sort by publication date.</p>
            </div>
        </div>

        <h2>Search Tips</h2>
        <ul>
            <li>Use quotes for exact phrase matches: "machine learning"</li>
            <li>Try different variations of terms if you don't find what you're looking for</li>
            <li>Check for typos in your search terms</li>
            <li>Use filters to refine your results after performing a search</li>
        </ul>

        <h2>Sorting Results</h2>
        <p>You can sort search results by:</p>
        <ul>
            <li>Relevance (default)</li>
            <li>Publication date (newest first)</li>
            <li>Title (A-Z)</li>
            <li>Author (A-Z)</li>
        </ul>

        <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-4 my-6 not-prose">
            <h3 class="text-lg font-medium text-indigo-900 mb-2">Pro Tip</h3>
            <p class="text-indigo-700">Save your frequently used searches by clicking the "Save Search" button. Access your saved searches from your profile page.</p>
        </div>

        <h2>Can't Find What You're Looking For?</h2>
        <p>If you can't find a specific resource:</p>
        <ol>
            <li>Try using fewer, more specific search terms</li>
            <li>Check different categories that might contain the resource</li>
            <li>Contact our support team for assistance</li>
        </ol>

        <div class="not-prose mt-8 flex space-x-4">
            <a href="{{ route('search') }}" 
               class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                Try Searching Now
            </a>
            <a href="{{ route('help.contact') }}" 
               class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                Need Help?
            </a>
        </div>
    </div>
@endsection