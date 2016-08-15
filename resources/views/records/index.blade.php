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
        <div class="row">
            <div class="col-md-6">
                <h3 class="page-header">Vinyl Database</h3>
                @foreach( $records as $record )
                    <p class="lead">
                        <a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->artist->name }} - {{ $record->title }}</a>
                    </p>
                @endforeach

                @if( ! $records->isEmpty() )
                    {{ $records->links() }}
                @endif
            </div>
            <div class="col-md-6">
                <h3 class="page-header">Discogs Collection</h3>
                @foreach( $discogs_releases->releases as $release)
                    <p class="lead">
                        {{ $release->basic_information->title }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
