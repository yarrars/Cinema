@extends('layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pelanggan</h2>
            </div>

            <div class="text-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ route('pelanggans.create') }}">Input Data</a>
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
            <th width="202.5px">Action</th>
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
            <td>
                <form
                    action="{{ route('pelanggans.destroy',$pelanggan->pelangganID) }}"
                    method="POST">

                    <a
                        class="btn btn-info"
                        href="{{ route('pelanggans.show',$pelanggan->pelangganID) }}">Show</a>

                    <a
                        class="btn btn-primary"
                        href="{{ route('pelanggans.edit',$pelanggan->pelangganID) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

{!! $pelanggans->links() !!}

@endsection
