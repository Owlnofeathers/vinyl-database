<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Artist;

class ArtistController extends Controller
{
    public function show($id)
    {
        $artist = Artist::where('id', $id)->first();

        return view( 'artists.show', compact( 'artist', $artist ));
    }
    
    public function showEdit($id)
    {
        $artist = Artist::where('id', $id)->first();

        return view( 'artists.edit', compact( 'artist', $artist ));
    }

    public function edit($id, Request $request)
    {
        $artist = Artist::where('id', $id)->first();

        $artist->name = $request->input('name');
        $artist->description = $request->input('description');

        $artist->save();

        redirect()->back()->with('success', 'Artist updated!');
    }
}
