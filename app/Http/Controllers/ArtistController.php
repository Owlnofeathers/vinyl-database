<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Artist;

class ArtistController extends Controller
{
    public function show($id)
    {
        $artist = Artist::find($id)->first();

        return view( 'artists.show', compact( 'artist', $artist ));
    }
}
