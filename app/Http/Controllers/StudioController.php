<?php

namespace App\Http\Controllers;

use App\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studios = Studio::latest()->paginate(5);
        return view("studios.index", compact('studios'))
        ->with('i',(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studios = Studio::all();
        return view("studios.create");
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
            //'studioId'=>'required',
            'studio'=>'required',
            'fasilitas'=>'required',
            'tarif'=>'required',
        ]);

        Studio::create($request->all());
        return redirect()->route('studios.index')
        ->with('Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    {
        return view('studios.show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        return view('studios.edit', compact('studio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        $request->validate([
            //'studioId'=>'required',
            'studio'=>'required',
            'fasilitas'=>'required',
            'tarif'=>'required',
        ]);

        $studio->update($request->all());
        return redirect()->route('studios.index')
        ->with('Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect()->route('studios.index')
        ->with('Data di Hapus');
    }
}
