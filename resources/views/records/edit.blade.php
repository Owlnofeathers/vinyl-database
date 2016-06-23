@extends('layouts.main')

@section('content')
    <div class ="container">
        <div class="row">
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
            </div>

            <div class="row">
                <p>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    <a href="/record/{{ $record->id }}" class="btn btn-default btn-lg" role="button">Cancel</a>
                </p>
            </div>
        </form>

        {{ Form::open(array('route' => array('record.destroy', $record->id), 'method' => 'delete')) }}
            <button class="btn btn-danger btn-lg" type="submit" >Delete</button>
        {{ Form::close() }}
    </div>
@endsection