<x-layouts.app>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Article {{ $article->title }}
        </h1>
        <small class="text-white">{{ $article->updated_at->diffForHumans() }}</small>
        <h2 class="text-white mt-4"><span class="font-bold">Category: </span>{{ $article->category()->pluck('name')[0] }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2">
            <p class="text-white">{{ $article->content }}</p>
        </div>
    </div>
</x-layouts.app>
