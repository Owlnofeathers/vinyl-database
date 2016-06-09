@extends('layouts.main')

@section('scripts')
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
@endsection

@section('content')

    <div class="container">
        <h1 class="page-header">Artists</h1>
        <p>
            <a href="/artist/create" class="btn btn-default btn-lg" role="button">Add New Artist</a>
        </p>

        @include('partials.search',['url'=>'artist'])

        @foreach($artists as $artist)
            <p class="lead">
                <a href="/artist/{{ $artist->id }}" title="View {{ $artist->name }}">{{ $artist->name }}</a>
            </p>
        @endforeach
    </div>

@endsection