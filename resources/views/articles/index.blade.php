<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach($articles as $article)
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl text-white">
                        <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        <br>
                        <small>{{ $article->updated_at->diffForHumans() }}</small>
                        <br>
                        <p>{{ $article->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
