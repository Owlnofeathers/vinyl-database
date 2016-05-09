<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Record;

class VinylController extends Controller
{
    /*
     * Returns all vinyl to the index view
     */
    public function index()
    {
        $records = Record::all();

        return view( 'records.index', compact('records', $records) );
    }

    /*
     * Returns the data of a selected record to the show view
     */
    public function show($id)
    {
        $record = Record::find($id)->first();
        $contents = json_decode( $record->contents );
        return view( 'records.show', compact(
            'record', $record,
            'contents', $contents
        ));
    }

    public function showEdit($id)
    {
        $record = Record::find($id)->first();
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
        $record = Record::find($id)->first();
        $contents = json_decode($record->contents, true);

        $contentsChanges = $request->input( 'contents' );
        foreach($contentsChanges as $key => $value)
        {
            $contents[$key] = $contentsChanges[$key];
        }
        $record->title = $request->input( 'title' );
        $record->contents = json_encode($contents);
        $record->save();

    }
}
