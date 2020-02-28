<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films=Film::latest()->paginate(5);
        return view('films.index' ,compact('films'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload="N";

        if($request->file('image')){
            $destination = "upload";
            $image = $request->file('image');
            $image->move($destination, $image->getClientOriginalName());
            $upload= "Y";
        }

        if($upload="Y"){
        $film = new \App\Film;
        $film->judul=$request->get('judul');
        $film->durasi=$request->get('durasi');
        $film->genre=$request->get('genre');
        $film->sinopsis=$request->get('sinopsis');
        $film->image=$image->getClientOriginalName();
        $film->save();
        }
        return redirect()->route('films.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show',compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $upload="N";



        $film = new \App\Film;
        $film->judul=$request->get('judul');
        $film->durasi=$request->get('durasi');
        $film->genre=$request->get('genre');
        $film->sinopsis=$request->get('sinopsis');
        if($request->file('image')){
            $destination = "upload";
            $image = $request->file('image');
            $image->move($destination, $image->getClientOriginalName());
        }
        $film->update();
        return redirect()->route('films.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')
        ->with('Data di Hapus');
    }
}
