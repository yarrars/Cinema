@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('pelanggans.index') }}" style="margin-bottom:10px">
                    Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Kode Kursi</th>
                        <td>{{ $pelanggan->kode_kursi }}</td>
                    </tr>
                    <tr>
                        <th>ID Jadwal</th>
                        <td>{{ $pelanggan->jadwalID }}</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>{{ $pelanggan->judul }}</td>
                    </tr>
                    <tr>
                        <th>Studio</th>
                        <td>{{ $pelanggan->studio }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $pelanggan->tanggal }}</td>
                    </tr>
                    <tr>
                        <th>Jam</th>
                        <td>{{ $pelanggan->jam }}</td>
                    </tr>
                </thead>
            </div>
        </div>
    </div>
@endsection
