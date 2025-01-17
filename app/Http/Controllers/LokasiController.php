<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $lokasi = Lokasi::all();
        return view('lokasis.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('lokasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lokasi = new Lokasi;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->provinsi = $request->provinsi;
        $lokasi->kabupaten = $request->kabupaten;
        $lokasi->save();
        return redirect()->route('lokasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lokasi = Lokasi::FindOrFail($id);
        return view('lokasis.show', compact('lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::FindOrFail($id);
        return view('lokasis.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lokasi = Lokasi::FindOrFail($id);
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->provinsi = $request->provinsi;
        $lokasi->kabupaten = $request->kabupaten;
        $lokasi->save();
        return redirect()->route('lokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $lokasi = Lokasi::FindOrFail($id);
        $lokasi->delete();
        return redirect()->route('lokasi.index');
    }
}
