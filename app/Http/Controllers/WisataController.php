<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Event;
use Illuminate\Http\Request;

class WisataController extends Controller
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
        $wisata = Wisata::all();
        return view('wisatas.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisatas.create', compact('kategori', 'lokasi', 'event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

        //upload image
        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/wisata',$name);
            $wisata->cover = $name;
        }
        $wisata->save();
        return redirect()->route('wisata.index')
        ->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::FindOrFail($id);
        return view('wisatas.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::FindOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisatas.edit', compact('wisata', 'kategori', 'lokasi', 'event'));
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
        $wisata = Wisata::FindOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
            
            if($request->hasFile('cover')){
            $wisata->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/wisata',$name);
            $wisata->cover = $name;
        }

        $wisata->id_event = $request->id_event;

            $wisata->save();
            return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::FindOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
