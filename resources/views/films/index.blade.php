
@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Film</h2>
            </div>

            <div class="text-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ route('films.create') }}">Input Data</a>
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
            <th width="50px">No</th>
            <th width="100px" style="text-align:center;">Gambar</th>
            <th style="text-align:center;">Judul</th>
            <th style="text-align:center;">Durasi</th>
            <th style="text-align:center;">Genre</th>
            <th style="text-align:center;">Sinopsis</th>
            <th width="202.5px" style="text-align:center;">Action</th>
        </tr>
        @foreach ($films as $film)
        <tr>
            <td>{{ ++$i }}</td>
            <td>@if($film->image)
                <img src="{{asset('upload/'.$film->image)}}"
                width="100px" height="120px">
                @else
                N/A
                @endif</td>
            <td>{{ $film->judul }}</td>
            <td>{{ $film->durasi }}</td>
            <td>{{ $film->genre }}</td>
            <td>{{ $film->sinopsis }}</td>
            <td>
                <form action="{{ route('films.destroy',$film->filmID) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('films.show',$film->filmID) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('films.edit',$film->filmID) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $films->links() !!}

@endsection
