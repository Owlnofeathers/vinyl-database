@extends('layouts.main')

@section('content')

    <div class="container text-center">
        <h1 class="page-header">Adam's Records</h1>

        @include('partials.search',['url'=>'record'])

        @if(Auth::check())
            <p>
                <a href="/record/create" class="btn btn-default" role="button">Add New Record</a>
            </p>
        @endif

        <br><br>
        @foreach( $records as $record )
            <p class="lead">
                <a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->artist->name }} - {{ $record->title }}</a>
            </p>
        @endforeach

        @if( ! $records->isEmpty() )
            {{ $records->links() }}
        @endif
    </div>

@endsection
