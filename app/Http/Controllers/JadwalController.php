<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Film;
use App\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::latest()->paginate(5);
        return view("jadwals.index", compact('jadwals'))
        ->with('i',(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Jadwal $jadwal)
    {

        $studios=Studio::all();
        $films=Film::all();
        $jadwals=Jadwal::all();
        return view('jadwals.create', compact('studios','films','jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'studio'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('jadwals.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwals.show',compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        $studios=Studio::all();
        $films=Film::all();
        $jadwals=Jadwal::all();
        return view('jadwals.edit', compact('studios','films','jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            //'studioId'=>'required',
            'judul'=>'required',
            'studio'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        $jadwal->update($request->all());
        return redirect()->route('jadwals.index')
        ->with('Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwals.index')
        ->with('Data di Hapus');
    }
}
