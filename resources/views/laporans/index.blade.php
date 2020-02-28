@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laporan</h2>
            </div>

            <div class="text-right" style="margin-bottom:10px;">
                <button class="btn btn-primary" onclick="myFunction()" id="button">Print</button>
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

{{-- <form action="" method="post">
    <table>
        <tr>
            <td>Dari</td>
            <td>:</td>
            <td><input type="date" name="awal"></td>
            <td></td>
            <td>Sampai</td>
            <td>:</td>
            <td><input type="date" name="akhir"></td>
            <td><input type="submit" name="cari" value="Cari"></td>
        </tr>
    </table>
</form> --}}

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
<script>
    function myFunction() {
    var x = document.getElementById("button");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    }
    window.print();
    x.style.display = "block";
    x.style.float = "right";
    x.style.marginBottom = "10px";
    }
    </script>
