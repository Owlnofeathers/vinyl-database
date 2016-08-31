@extends('layouts.main')

@section('content')
    <div class ="container">
{{--{{dd($discogs_record->community->want)}}--}}
        @if(isset($record) && isset($discogs_record))
            <h2><a href ="/artist/{{ $record->artist->id }}" title="View {{ $record->artist->name }}">{{ $record->artist->name }}</a></h2>
            <h1 class="page-header">{{ $record->title }}
                @if(Auth::check())
                    <small>
                        <a data-toggle="modal" data-target="#editRecordModal" type="button" title="Edit {{ $record->title }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                        </a>
                    </small>
                @endif
            </h1>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>This copy of {{ $record->title }} is a {{ !empty($contents['vinyl-color']) ? $contents['vinyl-color'] : '' }}
                            {{ !empty($contents['vinyl-size']) ? $contents['vinyl-size'].'"' : '' }} {{ $record->genre->name }}
                            {{ isset($discogs_record->genres[0]) ? ', ' . $discogs_record->genres[0] : '' }}{{ isset($discogs_record->genres[1]) ? ', and  ' . $discogs_record->genres[1] : '' }}
                            record, pressed by {{ $record->label->name }} in {{ isset($discogs_record->released) ? $discogs_record->released : '' }}
                            @if( !empty($contents['catalog-number']))
                                <p>The catalog number is: {{ $contents['catalog-number'] }}</p>
                            @endif
                        </p>

                        @if( isset($discogs_record->notes) )
                            <p><strong>Notes about this record from Discogs:</strong></p>
                            <p><em>{{ $discogs_record->notes }}</em></p>
                        @endif

                        @if( !empty($contents['pressing-info'] ))
                            <p><strong>Notes about this specific record in Adam's collection:</strong></p>
                            <p><em>{{ $contents['pressing-info'] }}</em></p><br>
                        @endif

                        @if($contents['condition'] <= 3)
                            <p>This record in Adam's collection is in poor condition.</p>
                        @elseif($contents['condition'] == 4)
                            <p>This record in Adam's collection is in great shape.</p>
                        @else
                            <p>This record in Adam's collection is in absolutely amazing condition!</p>
                        @endif

                        <p><strong>{{$discogs_record_rating->rating->count}}</strong> Discogs users give this record the average rating
                            <strong>{{$discogs_record_rating->rating->average}} out of 5</strong>
                        </p>
                        @if(isset($discogs_record->community->want))
                            <p><strong>{{ $discogs_record->community->want }}</strong> Discogs users currently want this record</p>
                        @endif

                        <div class="img-responsive text-center">
                            <img class="img-circle" src="{{ $faker->imageUrl(250, 250, 'cats') }}">
                        </div>

                        @if( Auth::check())
                            @if( ! is_null($record->updated_at) )
                                <p class="small pull-right">Last edited on {{ $record->updated_at }}</p>
                            @endif
                            @if( $record->enabled == true )
                                <p class="small pull-right">This record is enabled.&nbsp;</p>
                            @else
                                <p class="small pull-right">This record is <strong>NOT</strong> enabled.&nbsp;</p>
                            @endif
                        @endif
                        <p><a href="{{ $discogs_record->uri }}" title="{{ $discogs_record->uri }}" target="_blank">View this record on Discogs.com</a></p>
                    </div>
                </div>
            </div>

        @elseif( isset($discogs_record))
            <h2><a href ="" title="">{{ $discogs_record->artists[0]->name }}</a></h2>
            <h1 class=page-header">{{ $discogs_record->title }}</h1>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>This copy of {{ $discogs_record->title }} is a {{ isset($discogs_record->styles[0]) ? $discogs_record->styles[0] : '' }}
                            {{ isset($discogs_record->genres[0]) ? ', ' . $discogs_record->genres[0] : '' }}{{ isset($discogs_record->genres[1]) ? ', and ' . $discogs_record->genres[1] : '' }}
                            {{ $discogs_record->formats[0]->descriptions[0] }} {{ isset($discogs_record->formats[0]->descriptions[1]) ? $discogs_record->formats[0]->descriptions[1] : '' }},
                            pressed by {{ $discogs_record->labels[0]->name }} in {{ isset($discogs_record->released) ? $discogs_record->released : '' }}
                        </p>
                        <p>The catalog number is: {{ $discogs_record->labels[0]->catno }}</p>

                        @if( isset($discogs_record->notes) )
                            <p><em>{{ $discogs_record->notes }}</em></p>
                        @endif

                        <p><strong>{{$discogs_record_rating->rating->count}}</strong> Discogs users give this record the average rating
                            <strong>{{$discogs_record_rating->rating->average}} out of 5</strong>
                        </p>
                        @if(isset($discogs_record->community->want))
                            <p><strong>{{ $discogs_record->community->want }}</strong> Discogs users currently want this record</p>
                        @endif

                        <div class="text-center img-responsive">
                            <img class="img-circle" src="{{ $faker->imageUrl(250, 250, 'cats') }}">
                        </div>
                        <p><a href="{{ $discogs_record->uri }}" title="{{ $discogs_record->uri }}" target="_blank">View this record on Discogs.com</a></p>
                    </div>
                </div>
                @if(Auth::check())
                    <p>This record is not in your vinyl database. Would you like to add it?</p>
                    {!! Form::open(['url' => '/record/store-from-discogs']) !!}
                        <input type="hidden" name="artist-name" value="{{ $discogs_record->artists[0]->name }}">
                        <input type="hidden" name="title" value="{{ $discogs_record->title }}">
                        <input type="hidden" name="genre-name" value="{{ isset($discogs_record->styles[0]) ? $discogs_record->styles[0] : '' }}">
                        <input type="hidden" name="label-name" value="{{ $discogs_record->labels[0]->name }}">
                        <input type="hidden" name="discogs-id" value="{{ $discogs_record->id }}">
                        <input type="hidden" name="catalog-number" value="{{ $discogs_record->labels[0]->catno }}">
                        <input type="hidden" name="vinyl-color" value="">
                        <input type="hidden" name="pressing-info" value="">
                        <input type="hidden" name="vinyl-size" value="">
                        <input type="hidden" name="photo-link" value="">
                        <input type="hidden" name="condition" value="5">
                        <input type="submit" class="btn btn-default" role="button" value="Add Record To Database"></br></br>
                    {!! Form::close() !!}
                @endif
            </div>
        @else
            <p>Sorry, i do not have that record in my collection.</p>
        @endif
        <br><br><p><a href="/record" class="btn btn-default btn-lg" role="button">Back to all records</a></p>
    </div>

    @if(!empty($record))
        <!-- Edit Record Modal -->
        <div class="modal fade" id="editRecordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit {{ $record->artist->name }} - {{ $record->title }}</h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['data-remote']) }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name ="title" class="form-control" value="{{ $record->title }}">
                            </div>

                            <div class="form-group">
                                <label for="">Artist</label>
                                <select class="form-control" name="artist">
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->id }}" {{ $artist->id == $record->artist->id ? 'selected' : '' }}>{{ $artist->name }}</option>
                                    @endforeach
                                </select>
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
                                        @if( $key == 'condition' )
                                            <label for="">{{ $key }}</label>
                                            <select class="form-control" name="{{ $key }}">
                                                @foreach($conditions as $condition)
                                                    <option value="{{ $condition }}" {{ $condition == $value ? 'selected' : '' }}>{{ $condition }}</option>
                                                @endforeach
                                            </select>
                                        @elseif ( $key == 'vinyl-size' )
                                            <label for="">{{ $key }}</label>
                                            <select class="form-control" name="{{ $key }}">
                                                @foreach($sizes as $size)
                                                    <option value="{{ $size }}" {{ $size == $value ? 'selected' : '' }}>{{ $size }}</option>
                                                @endforeach
                                            </select>
                                        @else
                                            <label for="">{{ $key }}</label>
                                            <input type="text" name="{{ $key }}" class="form-control" value="{{ $value }}">
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::submit('Update Record', ['class' => 'btn btn-primary']) }}
                            </div>
                        {{ Form::close() }}

                        {{ Form::open(array('route' => array('record.destroy', $record->id), 'method' => 'delete', 'id' => 'delete')) }}
                        <button class="btn btn-danger" type="submit" >Delete</button>
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
            if( !confirm("Are you SURE you want to delete this record?") )
                event.preventDefault();
        });
    </script>
@endsection

