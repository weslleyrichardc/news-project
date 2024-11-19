<?php

namespace App\Models;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    /** @use HasFactory<ArticleFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
