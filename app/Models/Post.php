<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Add this line

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo // Update the return type
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo // Add this method
    {
        return $this->belongsTo(Category::class);
    }
}

