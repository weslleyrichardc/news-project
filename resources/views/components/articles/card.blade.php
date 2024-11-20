<div class="m-4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <form action="{{ route('articles.destroy', $article) }}" method="post">
        @csrf
        @method('delete')

        <x-forms.button class="float-right">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12l1.41 1.41L13.41 14l2.12 2.12l-1.41 1.41L12 15.41l-2.12 2.12l-1.41-1.41L10.59 14zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/></svg>
        </x-forms.button>
    </form>

    <div class="text-white">
        <h1>
            <a class="font-bold" href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            <br>
            <small>Updated {{ $article->updated_at->diffForHumans() }}</small>
        </h1>
        <p class="mt-6">{{ $article->content }}</p>
    </div>
</div>
