<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::query()
            ->when(request('search'), function ($query, $search) {
                $query->whereLike('title', '%'.$search.'%');
                $query->whereLike('content', '%'.$search.'%');
            })
            ->when(request('category'), function ($query, $category) {
                $query->where('category_id', $category);
            })
            ->latest('updated_at')
            ->paginate(4);

        return view('articles.index', [
            'articles' => $articles,
            'categories' => Category::all()->pluck('name', 'id'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedRequest = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'max:500'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        Article::query()->create(array_merge(
            $validatedRequest,
            ['slug' => Str::of($validatedRequest['title'])->slug('-')]
        ));

        return redirect()->route('articles.index');
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index');
    }
}
