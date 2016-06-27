@extends('layouts.main')

@section('content')
    <div class ="container">
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

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>This copy of {{ $record->title }} is a {{ $contents['vinyl-color'] }} {{ $contents['vinyl-size'] }}" {{ $record->genre->name }} record,
                        @if(!empty($contents['catalog-number']))
                            catalog number {{ $contents['catalog-number'] }}.
                        @endif
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

            <a href="/record" class="btn btn-default btn-lg" role="button">Back to all records</a>
        </div>

    </div>
@endsection

