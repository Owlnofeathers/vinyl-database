@extends('layouts.main')

@section('content')

    <div class="container text-center">
        <h1 class="page-header">Adam's Records</h1>

        {{--@include('partials.search',['url'=>'record'])--}}

        @if(Auth::check())
            <p>
                <a href="/record/create" class="btn btn-default" role="button">Add New Record</a>
            </p>
        @endif

        <br><br>
        <div class="row">
            {{--<div class="col-md-6">--}}
                {{--<h3 class="page-header">Vinyl Database</h3>--}}
                {{--@foreach( $records as $record )--}}
                    {{--<p class="lead">--}}
                        {{--<a href="/record/{{ $record->id }}" title="View {{ $record->title }}">{{ $record->artist->name }} - {{ $record->title }}</a>--}}
                    {{--</p>--}}
                {{--@endforeach--}}

                {{--@if( ! $records->isEmpty() )--}}
                    {{--{{ $records->links() }}--}}
                {{--@endif--}}
            {{--</div>--}}
            <div class="col-md-12">
                <h3 class="page-header">Discogs Collection</h3>
                <ul>
                    @foreach( $discogs_releases->releases as $release)
                        <li class="lead list-unstyled text-left">
                            <a href="/record/{{ $release->id }}">
                                {{ $release->basic_information->artists[0]->name }} - {{ $release->basic_information->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>

@endsection
