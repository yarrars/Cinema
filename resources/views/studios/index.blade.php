@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Studio</h2>
            </div>

            <div class="text-right" style="margin-bottom:20px;">
                <a class="btn btn-success" href="{{ route('studios.create') }}">Input Data</a>
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
            {{-- <th>ID Studio</th> --}}
            <th>Nama Studio</th>
            <th>Fasilitas</th>
            <th>Tarif</th>
            <th width="202.5px">Action</th>
        </tr>
        @foreach ($studios as $studio)
        <tr>
            <td>{{ ++$i }}</td>
            {{-- <td>{{ $studio->studioID }}</td> --}}
            <td>{{ $studio->studio }}</td>
            <td>{{ $studio->fasilitas }}</td>
            <td>{{ $studio->tarif }}</td>
            <td>
                <form action="{{ route('studios.destroy',$studio->studioID) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('studios.show',$studio->studioID) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('studios.edit',$studio->studioID) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $studios->links() !!}

@endsection
