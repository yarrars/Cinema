@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Input Data</h2>
            </div>
            <div class="text-right" style="margin-bottom:10px;">
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

    <form action="{{ route('studios.store') }}" method="POST">
        @csrf

        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="form-group">
            <input type="text" name="studioID" class="form-control" placeholder="ID studio">
            </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <input type="text" name="studio" class="form-control" placeholder="studio">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <textarea
                        class="form-control"
                        style="height:100px"
                        name="fasilitas"
                        placeholder="Fasilitas"></textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <input type="text" name="tarif" class="form-control" placeholder="Tarif">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
