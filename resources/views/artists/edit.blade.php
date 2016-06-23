@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1>Edit Artist</h1>
        <h2 class="page-header">{{ $artist->name }}</h2>
        <form action="/artist/{{ $artist->id }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name ="name" class="form-control" value="{{ $artist->name }}">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name ="description" class="form-control" rows="4" cols="">
                    {{ $artist->description }}
                </textarea>
            </div>
            <p>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                <a href="/artist/{{ $artist->id }}" class="btn btn-default btn-lg" role="button">Cancel</a>
            </p>
        </form>

        {{ Form::open(array('route' => array('artist.destroy', $artist->id), 'method' => 'delete')) }}
            <button class="btn btn-danger btn-lg" type="submit" >Delete</button>
        {{ Form::close() }}
    </div>
@endsection