@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1 class=page-header">{{ $artist->name }}
            <a href="#" type="button" title="Edit {{ $artist->name }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
        </h1>

        <div class="well">
            <p class="lead">{{ $artist->description }}</p>
        </div>

        <a href="/records" class="btn btn-primary btn-lg" role="button">Back to all records</a>

    </div>
@endsection