<x-modal name="new-category" :show="false" focusable>
    <form method="post" action="{{ route('categories.store') }}" class="p-6">
        @csrf

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            New Category
        </h2>

        <div class="mt-6">
            <x-forms.input-label for="name" value="name" class="sr-only" />
            <x-forms.text-input id="name" name="name" type="text" class="mt-1 p-4 w-full" placeholder="Category"/>
        </div>

        <div class="mt-6 flex justify-end">
            <x-forms.button icon="close" x-on:click="$dispatch('close')">Cancel</x-forms.button>

            <x-forms.button class="ms-3" icon="plus" x-data="">New Category</x-forms.button>
        </div>
    </form>
</x-modal>
