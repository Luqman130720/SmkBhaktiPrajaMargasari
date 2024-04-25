<?php

namespace App\Http\Controllers;

use App\Models\UnitUsaha;
use Illuminate\Http\Request;
use App\Models\EventUnitUsaha;
use Illuminate\Support\Facades\Storage;

class EventUnitUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('Admin.Pages.Event-Unit-Usaha.Show');
    // }

    public function Show_Unit_Usaha(UnitUsaha $unitUsaha)
    {
        return view('Admin.Pages.Event-Unit-Usaha.Show',
        [
            'unitUsaha' => $unitUsaha->all(),
        ]);
    }

    public function Show_Event($id)
    {
        $unitusaha = UnitUsaha::find($id);

        if (!$unitusaha) {
            abort(404, 'Kaprodi not found');
        }

        $events = $unitusaha->events;

        return view('Admin.Pages.Event-Unit-Usaha.List_Event', compact('events'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnitUsaha $unitUsaha)
    {
        return view('Admin.Pages.Event-Unit-Usaha.Create',
        [
            'unitUsaha'=>$unitUsaha->orderBy('unit_usaha')->get(),
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
            'unit_usaha_id'=> 'required|max:255',
            'image'=> 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-event-unit-usaha');
        }

        EventUnitUsaha::create($validatedData);
        return redirect('/admin/event-unit-usaha/show-unit-usaha')->with('success', 'Data Event Unit Usaha berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventUnitUsaha  $eventUnitUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(EventUnitUsaha $eventUnitUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventUnitUsaha  $eventUnitUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(EventUnitUsaha $eventUnitUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventUnitUsaha  $eventUnitUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventUnitUsaha $eventUnitUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventUnitUsaha  $eventUnitUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventUnitUsaha $eventUnitUsaha)
    {
        if($eventUnitUsaha->image){
            Storage::delete($eventUnitUsaha->image);
        }
        
        EventUnitUsaha::destroy($eventUnitUsaha->id);

        return back()->with('success', 'Data Event Unit Usaha berhasil dihapus!');
    }
}
