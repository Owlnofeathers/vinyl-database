@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Artists</h1>

        @include('partials.search',['url'=>'artist'])

        @if(Auth::check())
            <p>
                <a href="/artist/create" class="btn btn-primary" role="button">Add New Artist</a>
            </p>
        @endif

        <br><br>
        @foreach($artists as $artist)
            <p class="lead">
                <a href="/artist/{{ $artist->id }}" title="View {{ $artist->name }}">{{ $artist->name }}</a>
            </p>
        @endforeach
    </div>

@endsection