<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Record;
use Faker;

class VinylController extends Controller
{
    /*
     * Returns vinyl to the index view
     */
    public function index()
    {
        $search = \Request::get('search');

        if(isset($search))
        {
            $records = Record::where('title','like','%'.$search.'%')
                ->orderBy('title')->get();

            if(count($records) < 1)
            {
                redirect()->back()->with('danger', 'No records matched your search.');
            }
        } else {
            $records = Record::all();
        }

        return view( 'records.index', compact('records', $records) );
    }

    /*
     * Returns the data of a selected record to the show view
     */
    public function show($id)
    {
        $faker = Faker\Factory::create();
        
        $record = Record::find($id);
        $contents = json_decode($record->contents, true);

        return view( 'records.show', [
            'record' => $record,
            'contents' => $contents,
            'faker' => $faker
        ]);
    }

    public function showEdit($id)
    {
        $record = Record::where('id', $id)->first();
        $contents = $record->contents;

        return view('records.edit',
            [
                'contents' => json_decode($contents, true),
                'record' => $record
            ]);
    }

    /*
     * Edits the changed values for keys in the JSON contents
     * and the title
     */

    public function edit($id, Request $request)
    {
        $record = Record::find($id);

        $data = $request->input();

        $record->title = $request->input( 'title' );
        $contents = array_slice($data, 3);
        $record->contents = json_encode($contents, JSON_PRETTY_PRINT);
        $record->save();

        return redirect('/records')->with('success', 'Record updated!');

    }
}
