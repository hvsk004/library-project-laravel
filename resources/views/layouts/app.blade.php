<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Project - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-indigo-600">Library</span>
                    </a>
                    <div class="hidden sm:ml-8 sm:flex sm:space-x-6">
                        <a href="{{ route('resources.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 hover:border-indigo-600 transition-colors duration-200 {{ request()->routeIs('resources.*') ? 'border-b-2 border-indigo-600 text-indigo-600' : '' }}">Resources</a>
                        <a href="{{ route('search') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 hover:border-indigo-600 transition-colors duration-200 {{ request()->routeIs('search') ? 'border-b-2 border-indigo-600 text-indigo-600' : '' }}">Search</a>
                        <a href="{{ route('help.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 hover:border-indigo-600 transition-colors duration-200 {{ request()->routeIs('help.*') ? 'border-b-2 border-indigo-600 text-indigo-600' : '' }}">Help</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('notifications') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 transition-colors duration-200 {{ request()->routeIs('notifications') ? 'text-indigo-600' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                            Notifications
                        </a>
                        <a href="{{ route('profile') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 transition-colors duration-200 {{ request()->routeIs('profile') ? 'text-indigo-600' : '' }}">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline-flex">
                            @csrf
                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md transition-colors duration-200">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-700 transition-colors duration-200">Login</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md transition-colors duration-200">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white shadow-md mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500">&copy; {{ date('Y') }} Library Project. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>