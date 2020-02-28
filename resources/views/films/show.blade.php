@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('films.index') }}" style="margin-bottom:10px">
                    Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Film</th>
                        <td>{{ $film->filmID }}</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>{{ $film->judul }}</td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td>{{ $film->genre }}</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>{{ $film->durasi }}</td>
                    </tr>
                    <tr>
                        <th>Sinopsis</th>
                        <td>{{ $film->sinopsis }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>@if($film->image)
                            <img src="{{asset('upload/'.$film->image)}}"
                            width="100px" height="120px">
                            @else
                            N/A
                            @endif</td>
                    </tr>
                </thead>
            </div>
        </div>
    </div>
@endsection
