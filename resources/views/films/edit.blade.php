@extends('layouts.main') @section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Edit Data</h2>
            </div>
            <div class="text-right">
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

    <form action="{{ route('films.update',$film->filmID) }}" method="POST" enctype="multipart/form-data">

        @csrf @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID film :
                    </strong>
                    <input
                        type="text"
                        name="filmID"
                        value="{{ $film->filmID }}"
                        class="form-control"
                        placeholder="Name"
                        disabled="disabled">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :
                    </strong>
                    <input
                        type="text"
                        name="judul"
                        value="{{ $film->judul }}"
                        class="form-control"
                        placeholder="Judul">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Durasi :</strong>
                    <input
                        type="text"
                        name="durasi"
                        value="{{ $film->durasi }}"
                        class="form-control"
                        placeholder="Durasi">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Genre :
                        </strong>
                        <select class="form-control form-control-md" name="genre" id="">
                        <option value="{{$film->genre}}">{{$film->genre}}</option>
                            <option value="Horor">Horor</option>
                            <option value="Action">Action</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Musical">Musical</option>
                        </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Sinopsis :
                </strong>
                <div class="form-group">
                    <textarea
                        style="height:100px"
                        name="sinopsis"
                        value="{{ $film->sinopsis }}"
                        class="form-control"
                        placeholder="Sinopsis">{{ $film->sinopsis }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Gambar :
                </strong>
                <div class="form-group">
                    <img src="{{asset('upload/'.$film->image)}}"
                    width="100px" height="120px">
                <input type="file" name="image" class="form-control" placeholder="Gambar">
                <p>Abaikan Jika Tidak Ingin Mengganti Gambar</p>
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
