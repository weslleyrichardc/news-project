<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Article {{ $article->title }}
        </h2>
        <small class="text-white">{{ $article->updated_at->diffForHumans() }}</small>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2">
            <p class="text-white">{{ $article->content }}</p>
        </div>
    </div>
</x-layouts.app>
