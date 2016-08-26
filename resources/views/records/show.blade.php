@extends('layouts.main')

@section('content')
    <div class ="container">

        @if(isset($record) && isset($discogs_record))
            <h2><a href ="/artist/{{ $record->artist->id }}" title="View {{ $record->artist->name }}">{{ $record->artist->name }}</a></h2>
            <h1 class="page-header">{{ $record->title }}</h1>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="page-header">Adam's Database
                            @if(Auth::check())
                                <small>
                                    <a href="/record/{{ $record->id }}/edit" type="button" title="Edit {{ $record->title }}">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                                    </a>
                                </small>
                            @endif
                        </h3>
                        <p>This copy of {{ $record->title }} is a {{ isset($contents['vinyl-color']) ? $contents['vinyl-color'] : '' }}
                            {{ isset($contents['vinyl-size']) ? $contents['vinyl-size'].'"' : '' }} {{ $record->genre->name }} record,
                            pressed by {{ $record->label->name }}
                            @if( !empty($contents['catalog-number']))
                                <p>The catalog number is: {{ $contents['catalog-number'] }}</p>
                            @endif
                        </p>

                        @if( !empty($contents['pressing-info'] ))
                            <ul>
                                <li class="list-unstyled">{{ $contents['pressing-info'] }}</li>
                            </ul><br>
                        @endif

                        @if($contents['condition'] <= 3)
                            <p>The record is in poor condition.</p>
                        @elseif($contents['condition'] == 4)
                            <p>The record is in great shape.</p>
                        @else
                            <p>This record is in absolutely amazing condition!</p>
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
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="page-header">Discogs Database</h3>
                        <p>This copy of {{ $discogs_record->title }} is a {{ isset($discogs_record->styles[0]) ? $discogs_record->styles[0] : '' }}
                            {{ $discogs_record->formats[0]->descriptions[0] }} {{ isset($discogs_record->formats[0]->descriptions[1]) ? $discogs_record->formats[0]->descriptions[1] : '' }},
                            pressed by {{ $discogs_record->labels[0]->name }}.
                        </p>
                        <p>The catalog number is: {{ $discogs_record->labels[0]->catno }}</p>

                        @if( isset($discogs_record->notes) )
                            <ul>
                                <li class="list-unstyled">{{ $discogs_record->notes }}</li>
                            </ul>
                        @endif

                        <p><strong>{{$discogs_record_rating->rating->count}}</strong> Discogs users give this record the average rating
                            <strong>{{$discogs_record_rating->rating->average}} out of 5</strong>
                        </p>

                        <div class="img-responsive text-center">
                            <img class="img-circle" src="{{ $faker->imageUrl(250, 250, 'cats') }}">
                        </div>
                    </div>
                </div>
            </div>

        @elseif( isset($discogs_record))
            <h2><a href ="" title="">{{ $discogs_record->artists[0]->name }}</a></h2>
            <h1 class=page-header">{{ $discogs_record->title }}</h1>

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>This copy of {{ $discogs_record->title }} is a {{ isset($discogs_record->styles[0]) ? $discogs_record->styles[0] : '' }}
                            {{ $discogs_record->formats[0]->descriptions[0] }} {{ isset($discogs_record->formats[0]->descriptions[1]) ? $discogs_record->formats[0]->descriptions[1] : '' }},
                            pressed by {{ $discogs_record->labels[0]->name }}
                        </p>
                        <p>The catalog number is: {{ $discogs_record->labels[0]->catno }}</p>

                        @if( isset($discogs_record->notes) )
                            <ul>
                                <li class="list-unstyled">{{ $discogs_record->notes }}</li>
                            </ul>
                        @endif

                        <p><strong>{{$discogs_record_rating->rating->count}}</strong> Discogs users give this record the average rating
                            <strong>{{$discogs_record_rating->rating->average}} out of 5</strong>
                        </p>

                        <div class="text-center img-responsive">
                            <img class="img-circle" src="{{ $faker->imageUrl(250, 250, 'cats') }}">
                        </div>
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

@endsection

