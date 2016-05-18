@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Vinyl</h1>

            @foreach( $records as $record )
                    <p class="lead">
                        {{ $record->artist->name }} -
                        <a href="record/{{ $record->id }}" title="Edit {{ $record->title }}">{{ $record->title }}</a>
                    </p>
            @endforeach

    </div>

@endsection
