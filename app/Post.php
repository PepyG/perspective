<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fieldable = [
        'title', 'body', 'image'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

}
