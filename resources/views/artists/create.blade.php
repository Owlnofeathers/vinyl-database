@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1 class="page-header">Add Artist</h1>
        <form action="/artist" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="">Artist or Band Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter artist's name">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-default btn-lg">Submit</button>
            <a href="/record" class="btn btn-danger btn-lg" role="button">Cancel</a>
        </form>
    </div>
@endsection