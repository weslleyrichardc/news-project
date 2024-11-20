<x-modal name="new-article" :show="false" focusable>
    <form method="post" action="{{ route('articles.store') }}" class="p-6">
        @csrf

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            New Article
        </h2>

        <div class="mt-6">
            <x-forms.input-label for="title" value="title" class="sr-only" />
            <x-forms.text-input id="title" name="title" type="text" class="mt-1 p-4 w-full" placeholder="Title"/>

            <x-forms.dropdown input="Category" value="category_id" class="mt-1 p-4 w-4/5">
                @foreach($categories as $id => $category)
                    <option value="{{ $id }}">{{ $category }}</option>
                @endforeach
            </x-forms.dropdown>
            <x-forms.button class="align-middle ml-4" icon="plus" x-data="" x-on:click.prevent="$dispatch('open-modal', 'new-category')"></x-forms.button>

            <x-forms.input-label for="content" value="content" class="sr-only" />
            <x-forms.textarea-input id="content" name="content" class="mt-1 p-4 block w-full">Content</x-forms.textarea-input>
        </div>

        <div class="mt-6 flex justify-end">
            <x-forms.button icon="close" x-on:click="$dispatch('close')">Cancel</x-forms.button>

            <x-forms.button class="ms-3" icon="plus" x-data="">New Article</x-forms.button>
        </div>
    </form>
</x-modal>
