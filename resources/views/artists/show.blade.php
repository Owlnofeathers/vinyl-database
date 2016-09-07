@extends('layouts.main')

@section('content')

    <div class ="container">
        <h1 class=page-header">{{ $artist->name }}
            @if(Auth::check())
                <small>
                    <a data-toggle="modal" data-target="#editArtistModal" type="button" title="Edit {{ $artist->name }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                    </a>
                </small>
            @endif
        </h1>

        @if( !empty($artist->description))
            <div class="well">
                <p class="lead">{{ $artist->description }}</p>
            </div>
        @endif

        @if(count($artist->records) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Records by {{ $artist->name }} in the collection</h3>
                </div>
                <div class="panel-body">
                    @foreach($artist->records as $record)
                        <p><a href="/record/{{ $record->discogs_id }}" title="View {{ $record->title }}">{{ $record->title }}</a></p>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="container">
            <a href="/artist" class="btn btn-primary btn-lg sharp" role="button">Back to all artists</a>
            <a href="/record" class="btn btn-primary btn-lg sharp" role="button">Back to all records</a><br>
        </div><br><br>
    </div>

    @if(!empty($artist))
        <!-- Edit Artist Modal -->
        <div class="modal fade" id="editArtistModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit {{ $artist->name }}</h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['data-remote']) }}
                        <input type="hidden" name="_method" value="PUT">
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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary sharp" data-dismiss="modal">Close</button>
                            {{ Form::submit('Update Artist', ['class' => 'btn btn-primary sharp']) }}
                        </div>
                        {{ Form::close() }}

                        {{ Form::open(array('route' => array('artist.destroy', $artist->id), 'method' => 'delete', 'id' => 'delete')) }}
                        <button class="btn btn-danger sharp" type="submit" >Delete</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        $("#delete").click(function(event) {
            if( !confirm("Are you SURE you want to delete this artist?") )
                event.preventDefault();
        });
    </script>
@endsection