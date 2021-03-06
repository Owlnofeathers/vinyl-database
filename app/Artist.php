<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name'];

    public function records()
    {
        return $this->hasMany( 'App\Record' );
    }
}
