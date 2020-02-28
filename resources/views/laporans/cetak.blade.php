@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laporan</h2>
            </div>

            <div class="text-right" style="margin-bottom:10px;">
                <a class="btn btn-primary" href="/laporans/cetak">Print</a>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Kursi</th>
            <th>ID Jadwal</th>
            <th>Judul</th>
            <th>Studio</th>
            <th>Tanggal</th>
            <th>Jam</th>
        </tr>
        @foreach ($pelanggans as $pelanggan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pelanggan->kode_kursi }}</td>
            <td>{{ $pelanggan->jadwalID }}</td>
            <td>{{ $pelanggan->judul }}</td>
            <td>{{ $pelanggan->studio }}</td>
            <td>{{ $pelanggan->tanggal }}</td>
            <td>{{ $pelanggan->jam }}</td>
        </tr>
        @endforeach
    </table>
</div>

{!! $pelanggans->links() !!}

@endsection
