@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Artists</h1>

        @foreach($artists as $artist)
            <p class="lead">
                <a href="/artist/{{ $artist->id }}" title="View {{ $artist->name }}">{{ $artist->name }}</a>
            </p>
        @endforeach
    </div>

@endsection