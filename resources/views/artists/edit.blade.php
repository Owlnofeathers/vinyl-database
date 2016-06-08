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

            <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button>
            <a href="/artist/{{ $artist->id }}" class="btn btn-primary btn-lg btn-block" role="button">Cancel</a>
        </form>
    </div>
@endsection