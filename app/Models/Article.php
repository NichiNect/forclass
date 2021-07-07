<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'title', 'slug', 'picture', 'content', 'user_id'
    ];

    public function getImageArticle()
    {
        return asset('storage/images/articles/'.$this->picture);
    }

    /**
     * Relation Many to One `articles` table with `users` table
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
