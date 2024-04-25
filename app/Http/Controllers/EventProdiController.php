<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;
use App\Models\EventProdi;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Pages.Event-Prodi.Show');
    }

    public function Show_Prodi(ProgramStudi $kaprodi)
    {
        return view('Admin.Pages.Event-Prodi.Show',
        [
            'kaprodi' => $kaprodi->all(),
        ]);
    }
    
    public function Show_Event($id)
    {
        $kaprodi = ProgramStudi::find($id);

        if (!$kaprodi) {
            abort(404, 'Kaprodi not found');
        }

        $events = $kaprodi->events;

        return view('Admin.Pages.Event-Prodi.List_Event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProgramStudi $kaprodi)
    {
        return view('Admin.Pages.Event-Prodi.Create',
        [
            'kaprodi'=>$kaprodi->orderBy('prodi')->get(),
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
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'prodi_id' => 'required',
            // 'tanggal'=> 'required|max:255',
            'image'=> 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-event-prodi');
        }

        EventProdi::create($validatedData);
        return redirect('/admin/event-prodi/show-prodi')->with('success', 'Data event berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventProdi  $eventProdi
     * @return \Illuminate\Http\Response
     */
    public function show(EventProdi $eventProdi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventProdi  $eventProdi
     * @return \Illuminate\Http\Response
     */
    public function edit(EventProdi $eventProdi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventProdi  $eventProdi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventProdi $eventProdi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventProdi  $eventProdi
     * @return \Illuminate\Http\Response
     */

    public function destroy(EventProdi $eventProdi)
    {
        if($eventProdi->image){
            Storage::delete($eventProdi->image);
        }
        
        EventProdi::destroy($eventProdi->id);

        return back()->with('success', 'Data event berhasil dihapus!');
    }

}
