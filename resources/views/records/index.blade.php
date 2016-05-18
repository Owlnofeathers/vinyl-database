@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Vinyl</h1>

            @foreach( $records as $record )
                    <p class="lead">
                        <a href="/artist/{{ $record->artist_id }}" title="View {{ $record->artist->name }}">{{ $record->artist->name }}</a> -
                        <a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->title }}</a>
                    </p>
            @endforeach

    </div>

@endsection
