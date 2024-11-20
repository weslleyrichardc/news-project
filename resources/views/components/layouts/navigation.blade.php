<nav class="bg-gray-800">
    <div class="flex items-center justify-between h-16 px-8">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="text-white font-bold text-xl">{{ config('app.name', 'News Aggregator') }}</a>
        </div>

        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a
                href="{{ route('articles.index') }}"
                class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium leading-6"
            >
                <span class="float-left @if(request()->routeIs('articles.index')) text-green-500 @endif"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m10 17l5-5l-5-5z"/></svg></span>Articles
            </a>
        </div>
    </div>
</nav>
