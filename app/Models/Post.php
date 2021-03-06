<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['post'];

    function user() {

        return $this->belongsTo( User::class );
    }
}
