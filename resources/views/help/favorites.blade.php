@extends('help.layout')

@section('help-content')
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Managing Your Favorites</h1>

    <div class="prose max-w-none">
        <h2>Adding Resources to Favorites</h2>
        <p>You can easily save resources to your favorites collection for quick access later:</p>
        <ol>
            <li>Navigate to any resource's detail page</li>
            <li>Click the star icon or "Add to Favorites" button</li>
            <li>The resource will be instantly added to your favorites collection</li>
        </ol>

        <div class="not-prose bg-gray-50 rounded-lg p-6 my-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900">Pro Tip</h3>
                    <p class="mt-1 text-gray-600">You can also add resources to favorites from the search results page by clicking the star icon next to each resource.</p>
                </div>
            </div>
        </div>

        <h2>Organizing Your Favorites</h2>
        <p>Your favorites are automatically organized by:</p>
        <ul>
            <li>Date added (most recent first)</li>
            <li>Category</li>
            <li>Author</li>
        </ul>

        <div class="not-prose grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Sorting Options</h3>
                <p class="text-gray-600">Sort your favorites by title, author, date added, or last accessed.</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Filtering</h3>
                <p class="text-gray-600">Filter your favorites by category, author, or date range to find specific resources quickly.</p>
            </div>
        </div>

        <h2>Managing Your Favorites</h2>
        <p>From your favorites page, you can:</p>
        <ul>
            <li>Remove items from your favorites</li>
            <li>Create custom collections</li>
            <li>Share resources with other users</li>
            <li>Export your favorites list</li>
        </ul>

        <div class="not-prose bg-indigo-50 border border-indigo-200 rounded-lg p-6 my-6">
            <h3 class="text-lg font-medium text-indigo-900 mb-2">Bulk Actions</h3>
            <p class="text-indigo-700">Select multiple resources to:</p>
            <ul class="mt-2 space-y-2 text-indigo-600">
                <li class="flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/>
                        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    </svg>
                    Remove from favorites
                </li>
                <li class="flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                    Generate a reading list
                </li>
                <li class="flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                    </svg>
                    Share with others
                </li>
            </ul>
        </div>

        <h2>Favorite Collections</h2>
        <p>Create custom collections to organize your favorites:</p>
        <ol>
            <li>Go to your favorites page</li>
            <li>Click "Create Collection"</li>
            <li>Name your collection</li>
            <li>Add resources by dragging them or using the "Add to Collection" button</li>
        </ol>

        <div class="not-prose mt-8 border-t border-gray-200 pt-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Need More Help?</h3>
            <div class="flex space-x-4">
                <a href="{{ route('help.faq') }}" 
                   class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Check FAQ
                </a>
                <a href="{{ route('help.contact') }}" 
                   class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Contact Support
                </a>
            </div>
        </div>
    </div>
@endsection