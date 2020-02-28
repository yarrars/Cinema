@extends('layouts.main') @section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Edit Data</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('jadwals.index') }}">
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

    <form action="{{ route('jadwals.update',$jadwal->jadwalID) }}" method="POST">

        @csrf @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID jadwal :
                    </strong>
                    <input
                        type="text"
                        name="jadwalID"
                        value="{{ $jadwal->jadwalID }}"
                        class="form-control"
                        placeholder="Name"
                        disabled="disabled">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <select class="form-control form-control-md" name="judul" id="">
                        @foreach ($films as $film)
                        @if ($film->judul == $jadwal->judul )
                        <option value="{{$film->judul}}" selected>{{$film->judul}}</option>
                        @else
                        <option value="{{$film->judul}}">{{$film->judul}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Studio :</strong>
                    <select class="form-control form-control-md" name="studio" id="">
                        @foreach ($studios as $studio)
                        @if ($studio->studio == $jadwal->studio )
                        <option value="{{$studio->studio}}" selected>{{$studio->studio}}</option>
                        @else
                        <option value="{{$studio->studio}}">{{$studio->studio}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal :</strong>
                    <input
                        type="date"
                        name="tanggal"
                        value="{{ $jadwal->tanggal }}"
                        class="form-control"
                        placeholder="Fasilitas">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jadwal :
                    </strong>
                    <input
                        type="time"
                        name="jam"
                        value="{{ $jadwal->jam }}"
                        class="form-control"
                        placeholder="Tarif">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
