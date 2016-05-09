@extends('layouts.main')

@section('content')
    <div class ="container">
        <form action="#" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name ="title" class="form-control" id="title" placeholder="{{ $record->title }}">
            </div>

            @foreach($contents as $key => $value)
                <div class="form-group">
                    <label for="{{ $key }}">{{ $key }}</label>
                    <input type="text" name="contents" class="form-control" placeholder="{{$value}}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-default">Submit</button><br>
        </form>

        <a href="/records" class="btn btn-primary btn-lg" role="button">All Records</a>

    </div>
@endsection