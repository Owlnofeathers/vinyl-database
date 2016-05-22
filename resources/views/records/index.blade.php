@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Vinyl</h1>

        @include('partials.search',['url'=>'records'])

            @foreach( $records as $record )
                    <p class="lead">
                        <a href="/record/{{ $record->id }}" title="View {{ $record->title }}"">{{ $record->artist->name }} - {{ $record->title }}</a>
                    </p>
            @endforeach

    </div>

@endsection
