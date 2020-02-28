@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('studios.index') }}" style="margin-bottom:10px">
                    Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Studio</th>
                        <td>{{ $studio->studioID }}</td>
                    </tr>
                    <tr>
                        <th>Nama Studio</th>
                        <td>{{ $studio->studio }}</td>
                    </tr>
                    <tr>
                        <th>Fasilitas</th>
                        <td>{{ $studio->fasilitas }}</td>
                    </tr>
                    <tr>
                        <th>Tarif</th>
                        <td>{{ $studio->tarif }}</td>
                    </tr>
                </thead>
            </div>
        </div>
    </div>
@endsection
