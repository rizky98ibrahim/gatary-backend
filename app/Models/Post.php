<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'body',
        'image',
        'status',
        'published_at',
    ];


    // ! User has many posts
    public function author()
    {
        // *
        return $this->belongsTo(User::class, 'author_id');
    }

    // ! Category has many posts
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

}