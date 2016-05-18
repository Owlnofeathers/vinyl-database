@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1>{{ $record->artist->name }}</h1>
        <h2 class=page-header">{{ $record->title }}
            <a href="/record/{{ $record->id }}/edit" type="button" title="Edit {{ $record->title }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
        </h2>

        <table class="table table-striped">
            <tr>
                @foreach( $contents as $key => $value )
                    <td><strong>{{ $key }}</strong></td>
                @endforeach
            </tr>
            <tr>
                @foreach( $contents as $key => $value )
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        </table>
        <a href="/records" class="btn btn-primary btn-lg" role="button">Back to all records</a>

    </div>
@endsection

