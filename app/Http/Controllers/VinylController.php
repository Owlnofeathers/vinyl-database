<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Record;

class VinylController extends Controller
{
    public function show()
    {
        //$records = Record::all();

        return view( 'records.index');
    }
}
