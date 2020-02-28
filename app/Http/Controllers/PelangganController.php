<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Jadwal;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->paginate(5);
        return view("pelanggans.index", compact('pelanggans'))
        ->with('i',(request()->input('page',1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwals=Jadwal::all();
        $pelanggans=Pelanggan::all();
        return view('pelanggans.create',compact('jadwals', 'pelanggans'));
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
            'kode_kursi'=>'required',
            'jadwalID'=>'required',
            'judul'=>'required',
            'studio'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        Pelanggan::create($request->all());
        return redirect()->route('pelanggans.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggans.show' ,compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan, Jadwal $jadwal)
    {
        return view('pelanggans.edit',compact('jadwal', 'pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'kode_kursi'=>'required',
            'jadwalID'=>'required',
            'judul'=>'required',
            'studio'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        $pelanggan->update($request->all());
        return redirect('/pelanggans')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('studios.index')
        ->with('Data di Hapus');
    }
}
