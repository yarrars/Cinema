@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('jadwals.index') }}" style="margin-bottom:10px">
                    Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID jadwal</th>
                        <td>{{ $jadwal->jadwalID }}</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>{{ $jadwal->judul }}</td>
                    </tr>
                    <tr>
                        <th>Studio</th>
                        <td>{{ $jadwal->studio }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $jadwal->tanggal }}</td>
                    </tr>
                    <tr>
                        <th>Jam</th>
                        <td>{{ $jadwal->jam }}</td>
                    </tr>
                </thead>
            </div>
        </div>
    </div>
@endsection
