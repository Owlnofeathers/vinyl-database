<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = ['name'];

    public function records()
    {
        return $this->hasMany('App\Record');
    }
}
