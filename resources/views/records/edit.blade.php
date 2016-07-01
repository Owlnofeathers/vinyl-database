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

                <div class="form-group">
                    <label for="">Genre</label>
                    <select class="form-control" name="genre">
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $genre->id == $record->genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Label</label>
                    <select class="form-control" name="label">
                        @foreach($labels as $label)
                            <option value="{{ $label->id }}" {{ $label->id == $record->label->id ? 'selected' : '' }}>{{ $label->name }}</option>
                        @endforeach
                    </select>
                </div>

                @foreach($contents as $key => $value)
                    <div class="col-md-4">
                        <div class="form-group">
                            @if( $key == 'condition')
                                <label for="">{{ $key }}</label>
                                <select class="form-control" name="{{ $key }}">
                                    @foreach($conditions as $condition)
                                     <option value="{{ $condition }}" {{ $condition == $value ? 'selected' : '' }}>{{ $condition }}</option>
                                    @endforeach
                                </select>
                            @else
                                <label for="">{{ $key }}</label>
                                <input type="text" name="{{ $key }}" class="form-control" value="{{ $value }}">
                            @endif
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

        {{ Form::open(array('route' => array('record.destroy', $record->id), 'method' => 'delete', 'id' => 'delete')) }}
            <button class="btn btn-danger btn-lg" type="submit" >Delete</button>
        {{ Form::close() }}
    </div>
@endsection

@section('scripts')
    <script>
        $("#delete").click(function(event) {
            if( !confirm("Are you SURE you want to delete this record?") )
                event.preventDefault();
        });
    </script>
@endsection