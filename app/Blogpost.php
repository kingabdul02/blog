<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'author_id',
        'category_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }

    public function authors()
    {
        return $this->belongsToMany(\App\Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Category::class);
    }
}
