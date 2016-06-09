@extends('layouts.main')

@section('content')
    <div class ="container">
        <h1 class="page-header">Add Record</h1>

        <div class="col-md-6">
            <form action="/record" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Artist or Band Name</label>
                    <select class="form-control" name="artist-id">
                        @foreach($artists as $artist)
                            <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Album Title</label>
                    <input type="text" name ="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Catalog Number</label>
                    <input type="text" name ="catalog-number" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Vinyl Color</label>
                    <input type="text" name ="vinyl-color" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Pressing Information</label>
                    <textarea name="pressing-info" class="form-control" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Vinyl Size</label>
                    <select class="form-control" name="vinyl-size">
                        @foreach($sizes as $size)
                            <option value="{{ $size }}">{{ $size }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Genre</label>
                    <input type="text" name ="genre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Link A Photo</label>
                    <input type="text" name ="photo-link" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Condition</label>
                    <select class="form-control" name="condition">
                        @foreach($conditions as $condition)
                            <option value="{{ $condition }}">{{ $condition }}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-default btn-lg">Submit</button>
                <a href="/record" class="btn btn-danger btn-lg" role="button">Cancel</a>
            </form>
        </div>

    </div>
@endsection