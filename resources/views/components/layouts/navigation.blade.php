<nav class="bg-gray-800">
    <div class="flex items-center justify-between h-16 px-8">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="text-white font-bold text-xl">{{ config('app.name', 'News Aggregator') }}</a>
        </div>

        <!-- Search Bar -->
        <div class="flex-1 flex justify-center mx-4">
            <div class="relative w-full max-w-md">
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                />
                <button
                    type="submit"
                    class="absolute right-0 top-0 mt-2 mr-2 text-gray-400 hover:text-white">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/></svg>
                </button>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('articles.index') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium @if(request()->routeIs('articles.index')) text-green-500 @endif">Articles</a>
        </div>
    </div>
</nav>
