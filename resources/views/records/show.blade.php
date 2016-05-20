@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1>{{ $record->artist->name }}</h1>
        <h2 class=page-header">{{ $record->title }}
            <a href="/record/{{ $record->id }}/edit" type="button" title="Edit {{ $record->title }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
        </h2>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>This copy of {{ $record->title }} is a {{ $vinyl_color }} {{ $vinyl_size }}" {{ $genre }} record, catalog number {{ $catalog_number }}.</p>
                    <p>Some of the notable features of this record are:</p>
                    <ul>
                        <li>{{ $pressing_info }}.</li>
                    </ul><br>
                    @if($condition <= 3)
                        <p>The record is in poor condition.</p>
                    @elseif($condition == 4)
                        <p>The record is in great shape.</p>
                    @else
                        <p>This record is in absolutely amazing condition!</p>
                    @endif
                </div>
            </div>

            <a href="/records" class="btn btn-primary btn-lg" role="button">Back to all records</a>
        </div>

    </div>
@endsection

