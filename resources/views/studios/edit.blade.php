@extends('layouts.main') @section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Edit Data</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('studios.index') }}">
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

    <form action="{{ route('studios.update',$studio->studioID) }}" method="POST">

        @csrf @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID studio :
                    </strong>
                    <input
                        type="text"
                        name="studioID"
                        value="{{ $studio->studioID }}"
                        class="form-control"
                        placeholder="Name"
                        disabled="disabled">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama studio :
                    </strong>
                    <input
                        type="text"
                        name="studio"
                        value="{{ $studio->studio }}"
                        class="form-control"
                        placeholder="Nama Studio">
                </div>
            </div>
            {{--
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fasilitas :</strong>
                    <input
                        type="text"
                        name="fasilitas"
                        value="{{ $studio->fasilitas }}"
                        class="form-control"
                        placeholder="Fasilitas">
                </div>
            </div> --}}

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <textarea
                        class="form-control"
                        style="height:100px"
                        name="fasilitas"
                        placeholder="Fasilitas">{{$studio->fasilitas}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tarif :
                    </strong>
                    <input
                        type="text"
                        name="tarif"
                        value="{{ $studio->tarif }}"
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
