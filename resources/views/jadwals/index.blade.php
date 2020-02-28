@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jadwal</h2>
            </div>

            <div class="text-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ route('jadwals.create') }}">Input Data</a>
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
            <th>ID Jadwal</th>
            <th>Judul</th>
            <th>Studio</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th width="202.5px">Action</th>
        </tr>
        @foreach ($jadwals as $jadwal)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jadwal->jadwalID }}</td>
            <td>{{ $jadwal->judul }}</td>
            <td>{{ $jadwal->studio }}</td>
            <td>{{ $jadwal->tanggal }}</td>
            <td>{{ $jadwal->jam }}</td>
            <td>
                <form action="{{ route('jadwals.destroy',$jadwal->jadwalID) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('jadwals.show',$jadwal->jadwalID) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('jadwals.edit',$jadwal->jadwalID) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $jadwals->links() !!}

@endsection
