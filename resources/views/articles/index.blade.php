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

            <x-modal name="new-article" :show="false" focusable>
                <form method="post" action="{{ route('articles.store') }}" class="p-6">
                    @csrf

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        New Article
                    </h2>

                    <div class="mt-6">
                        <x-forms.input-label for="title" value="title" class="sr-only" />
                        <x-forms.text-input id="title" name="title" type="text" class="mt-1 p-4 w-full" placeholder="Title"/>

                        <x-forms.dropdown input="Category" value="category" class="mt-1 p-4 w-full">
                            @foreach($categories as $id => $category)
                                <option value="{{ $id }}">{{ $category }}</option>
                            @endforeach
                        </x-forms.dropdown>

                        <x-forms.input-label for="content" value="content" class="sr-only" />
                        <x-forms.textarea-input id="content" name="content" class="mt-1 p-4 block w-full">Content</x-forms.textarea-input>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-forms.button icon="close" x-on:click="$dispatch('close')">Cancel</x-forms.button>

                        <x-forms.button class="ms-3" icon="plus" x-data="">New Article</x-forms.button>
                    </div>
                </form>
            </x-modal>

            @foreach($articles as $article)
                <x-articles.card :$article />
            @endforeach
        </div>
    </div>
</x-layouts.app>
