<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'title',
        'slug',
        'subtitle',
        'image',
        'author',
        'content'
    ];

    // relazione db
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
