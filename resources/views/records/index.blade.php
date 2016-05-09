@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="page-header">Adam's Vinyl</h1>

        <table class="table table-striped">
            <tr>
                <td>Artist</td>
                <td>Album</td>
            </tr>
            @foreach( $records as $record )
                <tr>
                    <td>{{ $record->artist->name }}</td>
                    <td>{{ $record->title }}</td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection
