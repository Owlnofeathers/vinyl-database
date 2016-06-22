@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Records</h1>

        @include('partials.search',['url'=>'record'])

        @if(Auth::check())
            <p>
                <a href="/record/create" class="btn btn-primary" role="button">Add New Record</a>
            </p>
        @endif

        <br><br>
        @foreach( $records as $record )
            <p class="lead">
                <a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->artist->name }} - {{ $record->title }}</a>
            </p>
        @endforeach

    </div>

@endsection
