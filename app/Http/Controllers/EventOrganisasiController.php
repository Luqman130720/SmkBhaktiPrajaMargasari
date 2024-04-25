<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\EventOrganisasi;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class EventOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('Admin.Pages.Event-Organisasi.Show');
    // }

    public function Show_Organisasi(Organisasi $organisasi)
    {
        return view('Admin.Pages.Event-Organisasi.Show',
        [
            'organisasi' => $organisasi->all(),
        ]);
    }

    public function Show_Event($id)
    {
        $organisasi = Organisasi::find($id);

        if (!$organisasi) {
            abort(Response::HTTP_NOT_FOUND, 'Organisasi not found');
        }

        $events_organisasi = $organisasi->events;

        return view('Admin.Pages.Event-Organisasi.List_Event', compact('events_organisasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Organisasi $organisasi)
    {
        return view('Admin.Pages.Event-Organisasi.Create', 
        [
            'organisasis'=>$organisasi->orderBy('organisasi')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'organisasi_id' => 'required|exists:organisasis,id',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-event-organisasi');
        }

        EventOrganisasi::create($validatedData);

        return redirect('/admin/event-organisasi/show-organisasi')->with('success', 'Data Event Organisasi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventOrganisasi  $eventOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function show(EventOrganisasi $eventOrganisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventOrganisasi  $eventOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(EventOrganisasi $eventOrganisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventOrganisasi  $eventOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventOrganisasi $eventOrganisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventOrganisasi  $eventOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventOrganisasi $eventOrganisasi)
    {
        if($eventOrganisasi->image){
            Storage::delete($eventOrganisasi->image);
        }
        
        EventOrganisasi::destroy($eventOrganisasi->id);

        return back()->with('success', 'Data Event Organisasi berhasil dihapus!');
    }
}
