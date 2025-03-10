<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = [
        "name",
        "image",
        "description"
    ];


    public function posts()
{
    return $this->hasMany(Post::class, 'author_id');
}

}
