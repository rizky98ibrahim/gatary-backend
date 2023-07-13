<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categrory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_description',
    ];


    // ! Category has many posts
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories');
    }
}