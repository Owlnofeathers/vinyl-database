<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artist;

class ArtistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search');

        if(isset($search))
        {
            $artists = Artist::where('name','like','%'.$search.'%')
                ->orderBy('name')->get();

            if(count($artists) < 1)
            {
                redirect()->back()->with('danger', 'No records matched your search.');
            }
        } else {
            $artists = Artist::all()->sortBy('name');
        }

        return view('artists.index', compact('artists', $artists));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'artists.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->save();

        return redirect('/artist')->with('success', 'New artist added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);

        return view( 'artists.show', compact( 'artist', $artist ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);

        return view( 'artists.edit', compact( 'artist', $artist ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);

        $artist->name = $request->input('name');
        $artist->description = $request->input('description');
        $artist->save();

        return redirect('/artist')->with('success', 'Artist updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();

        return redirect('/artist')->with('success', 'Artist deleted!');
    }
}
