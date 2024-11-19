<div class="m-4 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="text-white">
        <h1>
            <a class="font-bold" href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            <br>
            <small>Updated {{ $article->updated_at->diffForHumans() }}</small>
        </h1>
        <p class="mt-6">{{ $article->content }}</p>
    </div>
</div>
