<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2">
            <div class="col-span-2">
                {{ $articles->links() }}
            </div>

            <div class="col-span-2 my-6 flex space-x-4">
                <x-forms.search :$categories />
                <x-forms.button icon="plus" x-data="" x-on:click.prevent="$dispatch('open-modal', 'new-article')">New Article</x-forms.button>
            </div>

            @include('articles.partials.new-article')
            @include('categories.partials.new-category')

            @foreach($articles as $article)
                <x-articles.card :$article />
            @endforeach
        </div>
    </div>
</x-layouts.app>
