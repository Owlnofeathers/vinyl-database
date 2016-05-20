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

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Records by {{ $artist->name }} in the collection</h3>
            </div>
            <div class="panel-body">
                @foreach($artist->records as $record)
                    <p><a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->title }}</a></p>
                @endforeach

            </div>
        </div>
        <a href="/records" class="btn btn-primary btn-lg" role="button">Back to all records</a>

    </div>
@endsection