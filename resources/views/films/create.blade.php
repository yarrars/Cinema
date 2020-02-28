@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Input Data</h2>
            </div>
            <div class="text-right" style="margin-bottom:10px;">
                <a class="btn btn-primary" href="{{ route('films.index') }}">
                    Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Judul Film :
                </strong>
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Durasi :
                </strong>
                <div class="form-group">
                    <input type="text" name="durasi" class="form-control" placeholder="Durasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Genre :
                </strong>
                <select class="form-control form-control-md" name="genre" id="">
                    <option value="" disabledselected="disabledselected">Genre</option>
                    <option value="Horor">Horor</option>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Musical">Musical</option>
                </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Sinopsis :
                </strong>
                <div class="form-group">
                    <textarea
                        class="form-control"
                        style="height:100px"
                        name="sinopsis"
                        placeholder="Sinopsis"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Gambar :
                </strong>
                <div class="form-group">
                    <input type="file" name="image" class="form-control" placeholder="Gambar">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
