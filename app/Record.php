<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'title',
        'contents'
    ];

    public function artist()
    {
        return $this->belongsTo( 'App\Artist' );
    }
}
