<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Record;

use Faker;

class RecordController extends Controller
{
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $record = Record::find($id);
        $contents = json_decode($record->contents, true);

        return view( 'records.show', [
            'record' => $record,
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

        return view('records.edit',
            [
                'contents' => json_decode($contents, true),
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
        $contents = array_slice($data, 3);
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
        //
    }
}