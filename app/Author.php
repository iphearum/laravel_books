<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    protected $fillable = [
        'name',
        'place'
    ];
}
function books(){
    return $this->belongsTo(\App\Book::class);
}
