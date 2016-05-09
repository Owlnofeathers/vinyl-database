@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1>{{ $record->artist->name }}</h1>
        <h2 class=page-header">{{ $record->title }}</h2>

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

        <a href="/records" class="btn btn-primary btn-lg" role="button">All Records</a>

    </div>
@endsection

