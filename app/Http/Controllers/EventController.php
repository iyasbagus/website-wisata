<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class EventController extends Controller
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
        $event = Event::all();
        return view('eventss.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('eventss.create', compact('lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->tema_event = $request->tema_event;
        $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
        $event->id_lokasi = $request->id_lokasi;

        $event->save();
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::FindOrFail($id);
        return view('eventss.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::FindOrFail($id);
        $lokasi = Lokasi::all();
        return view('eventss.edit', compact('event', 'lokasi'));
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
         $event = Event::FindOrFail($id);
            $event->tema_event = $request->tema_event;
            $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
            $event->id_lokasi = $request->id_lokasi;

            $event->save();
            return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::FindOrFail($id);
        $event->delete();
        return redirect()->route('event.index');
    }
}
