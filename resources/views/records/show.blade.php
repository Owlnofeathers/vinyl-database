@extends('layouts.main')

@section('content')
    <div class ="container">

        @if($record)
            <h2><a href ="/artist/{{ $record->artist->id }}" title="View {{ $record->artist->name }}">{{ $record->artist->name }}</a></h2>
            <h1 class=page-header">{{ $record->title }}
                @if(Auth::check())
                    <small>
                        <a href="/record/{{ $record->id }}/edit" type="button" title="Edit {{ $record->title }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                        </a>
                    </small>
                @endif

            </h1>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="page-header">Adam's Database</h3>
                        <p>This copy of {{ $record->title }} is a {{ $contents['vinyl-color'] }} {{ $contents['vinyl-size'] }}" {{ $record->genre->name }} record,
                            pressed by {{ $record->label->name }}
                            @if(!empty($contents['catalog-number']))
                                (catalog number {{ $contents['catalog-number'] }})
                            @endif
                            .
                        </p>

                        @if(!empty($contents['pressing-info'] ))
                            <p>Some of the notable features of this record are:</p>
                            <ul>
                                <li>{{ $contents['pressing-info'] }}.</li>
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
                            <img class="img-circle" src="{{ $faker->imageUrl(300, 300, 'cats') }}">
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
                        <p>This copy of {{ $discogs_record->title }} is a {{ $discogs_record->styles[0] }}
                            {{ $discogs_record->formats[0]->descriptions[0] }} {{ $discogs_record->formats[0]->descriptions[1] }},
                            pressed by {{ $discogs_record->labels[0]->name }}.
                        </p>
                        <p>The catalog number is: {{ $discogs_record->labels[0]->catno }}</p>

                        @if( ! empty($discogs_record->notes) )
                            <p>Some of the notable features of this record are:</p>
                            <p>{{ $discogs_record->notes }}</p><br>
                        @endif

                        <div class="img-responsive text-center">
                            <img class="img-circle" src="{{ $faker->imageUrl(300, 300, 'cats') }}">
                        </div>
                    </div>
                </div>
            </div>

        @else
            <h2><a href ="" title="">{{ $discogs_record->artists[0]->name }}</a></h2>
            <h1 class=page-header">{{ $discogs_record->title }}</h1>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>This copy of {{ $discogs_record->title }} is a {{ $discogs_record->styles[0] }}
                            {{ $discogs_record->formats[0]->descriptions[0] }} {{ $discogs_record->formats[0]->descriptions[1] }},
                            pressed by {{ $discogs_record->labels[0]->name }}.
                        </p>
                        <p>The catalog number is: {{ $discogs_record->labels[0]->catno }}</p>

                        @if( ! empty($discogs_record->notes) )
                            <p>Some of the notable features of this record are:</p>
                            <p>{{ $discogs_record->notes }}</p><br>
                        @endif

                        <div class="img-responsive text-center">
                            <img class="img-circle" src="{{ $faker->imageUrl(300, 300, 'cats') }}">
                        </div>
                    </div>
                </div>
                @if(Auth::check())
                    <p>This record is not in your vinyl database. Would you like to add it?</p>
                    {!! Form::open(['link_to_action' => 'RecordController@storeFromDiscogs', $title = null]) !!}
                    {{--<form action="{!!link_to_action('RecordController@storeFromDiscogs',  $title = null, $parameters = array(), $attributes = array())!!}">--}}
                        <input type="hidden" name="artist-name" value="{{ $discogs_record->artists[0]->name }}">
                        <input type="hidden" name="title" value="{{ $discogs_record->title }}">
                        <input type="hidden" name="genre" value="{{ $discogs_record->styles[0] }}}">
                        <input type="hidden" name="label-name" value="{{ $discogs_record->labels[0]->name }}">
                        <a href="/record" type="submit" class="btn btn-default" role="button">Add Record To Database</a></br></br>
                    {{--</form>--}}
                    {!! Form::close() !!}
                @endif
            </div>
        @endif
    </div>

    <div class="row">
        <div class ="container">
            <a href="/record" class="btn btn-default btn-lg" role="button">Back to all records</a>
        </div>
    </div>

@endsection

