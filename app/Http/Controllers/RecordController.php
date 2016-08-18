<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Genre;
use App\Label;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Record;

use Faker;

class RecordController extends Controller
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
        $discogs_releases = $this->getDiscogsReleases();

        if(isset($search))
        {
            $records = Record::where('title','like','%'.$search.'%')
                ->where('enabled', true)
                ->orderBy('title')->paginate(20);

            if(count($records) < 1)
            {
                redirect()->back()->with('danger', 'No records matched your search.');
            }
        } else {
            $records = Record::where('enabled', true)
                ->orderBy('title')->paginate(20);

        }

        return view( 'records.index', compact('records', 'discogs_releases') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');
        $labels = Label::all()->sortBy('name');
        $sizes = ['7', '10', '12'];
        $conditions = ['1', '2', '3', '4', '5'];

        return view('records.create', compact(
            'artists', $artists,
            'sizes', $sizes,
            'genres', $genres,
            'labels', $labels,
            'conditions', $conditions
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new Record();

        $data = $request->input();
        $record->artist_id = $request->input('artist-id');
        $record->title = $request->input('title');
        $record->genre_id = $request->input('genre');
        $record->label_id = $request->input('label');
        $record->enabled = true;
        $contents = array_slice($data, 6);
        $record->contents = json_encode($contents, JSON_PRETTY_PRINT);
        $record->save();

        return redirect('/record')->with('success', 'Record added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faker = Faker\Factory::create();       

        $discogs_record = $this->getDiscogsRelease($id);

        $record = Record::where('title', 'like', $discogs_record->title)->first();
        if($record){
          $contents = json_decode($record->contents, true);  
        } else {
            $contents = '';
        }

        return view( 'records.show', [
            'record' => $record,
            'discogs_record' => $discogs_record,
            'contents' => $contents,
            'faker' => $faker
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::find($id);
        $contents = $record->contents;
        $genres = Genre::all()->sortBy('name');;
        $labels = Label::all()->sortBy('name');;
        $conditions = ['1', '2', '3', '4', '5'];

        return view('records.edit',
            [
                'contents' => json_decode($contents, true),
                'genres' => $genres,
                'labels' => $labels,
                'conditions' => $conditions,
                'record' => $record
            ]);
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
        $record = Record::find($id);

        $data = $request->input();

        $record->title = $request->input( 'title' );
        $record->genre_id = $request->input( 'genre' );
        $record->label_id = $request->input( 'label' );
        $contents = array_slice($data, 5);
        $record->contents = json_encode($contents, JSON_PRETTY_PRINT);
        $record->save();

        return redirect('/record')->with('success', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();

        return redirect('/record')->with('success', 'Record deleted!');
    }

    public function getDiscogsReleases()
    {
        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://api.discogs.com/users/owlsays/collection/folders/0/releases');
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'vinyl-databse');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return json_decode($query);
    }

    public function getDiscogsRelease($id)
    {
       $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://api.discogs.com/releases/' . $id);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'vinyl-database');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return json_decode($query); 
    }
}
