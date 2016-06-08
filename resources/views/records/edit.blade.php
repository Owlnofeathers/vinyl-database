@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1>Edit Record Contents</h1>
        <h2 class="page-header">{{ $record->artist->name }} - {{ $record->title }}</h2>
        <form action="/record/{{ $record->id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name ="title" class="form-control" value="{{ $record->title }}">
            </div>

            @foreach($contents as $key => $value)
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">{{ $key }}</label>
                        <input type="text" name="{{ $key }}" class="form-control" value="{{$value}}">
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button>
            <a href="/record/{{ $record->id }}" class="btn btn-primary btn-lg btn-block" role="button">Cancel</a>
        </form>
    </div>
@endsection