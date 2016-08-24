@extends('layouts.main')

@section('content')

    <div class="container text-center">
        <h1 class="page-header">Artists</h1>

        @include('partials.search',['url'=>'artist'])

        <br><br>
        @foreach($artists as $artist)
            <p class="lead">
                <a href="/artist/{{ $artist->id }}" title="View {{ $artist->name }}">{{ $artist->name }}</a>
            </p>
        @endforeach
    </div>

@endsection