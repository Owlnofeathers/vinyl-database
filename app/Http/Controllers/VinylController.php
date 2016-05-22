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
        $record = Record::where('id', $id)->first();
        $contents = json_decode( $record->contents );
//        $decontents = json_decode($contents);

        foreach($contents as $field => $value)
        {
            if($field == 'catalog-number')
            {
                $catalog_number = $value;
            } elseif($field == 'vinyl-color')
            {
                $vinyl_color = $value;
            } elseif($field == 'pressing-info')
            {
                $pressing_info = $value;
            } elseif($field == 'vinyl-size')
            {
                $vinyl_size = $value;
            } elseif($field == 'genre')
            {
                $genre = $value;
            } elseif($field == 'photo-link')
            {
                $photo_link = $value;
            }else
            {
                $condition = $value;
            }
        }
        return view( 'records.show', [
            'record' => $record,
            'contents' => $contents,
            'catalog_number' => $catalog_number,
            'vinyl_color' => $vinyl_color,
            'pressing_info' => $pressing_info,
            'vinyl_size' => $vinyl_size,
            'genre' => $genre,
            'photo_link' => $photo_link,
            'condition' => $condition
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
        $record = Record::where('id', $id)->first();
        $contents = json_decode($record->contents, true);

        $data = $request->input();
//        dd($data);
        if($request->input( 'title' ) == '')
        {
            \Log::debug('EMPTY');
        } else {
            \Log::debug('NOT EMPTY');
            $record->title = $request->input( 'title' );
        }

        foreach($contents as $key => $value)
        {
            if($data[$key] == '')
            {
                \Log::debug('EMPTY');
            } else {
                \Log::debug('NOT EMPTY');
                $contents[$key] = $data[$key];
            }
        }

        $record->contents = json_encode($contents, JSON_PRETTY_PRINT);
        $record->save();

        redirect()->back()->with('success', 'Record updated!');

    }
}
