@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Input Data</h2>
            </div>
            <div class="text-right" style="margin-bottom:10px;">
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

    <form action="{{ route('jadwals.store') }}" method="POST">
        @csrf



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Studio :
                    </strong>
                    <select class="form-control form-control-md" name="studio" id="">
                        <option value="" disabled="disabled" selected="selected">Studio</option>
                        @if ($studios->count()>0) @foreach ($studios as $studio)

                        <option value="{{$studio->studio}}">{{$studio->studio}}</option>

                        @endforeach @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Film :
                    </strong>
                    <select class="form-control form-control-md" name="judul" id="">
                        <option value="" disabled="disabled" selected="selected">Judul Film</option>
                        @if ($films->count()>0) @foreach ($films as $film)

                        <option value="{{$film->judul}}">{{$film->judul}}</option>

                        @endforeach @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal :
                    </strong>
                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jam :
                    </strong>
                    <input type="time" name="jam" class="form-control" placeholder="jam" value="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
