<?php

namespace App\Http\Controllers;

use App\Models\EventUnitUsaha;
use App\Models\UnitUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnitUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UnitUsaha $unit_usaha)
    {
        return view('Admin.Pages.Unit-Usaha.Show',
        [
            'unit_usaha' => $unit_usaha->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Unit-Usaha.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'unit_usaha' => 'required|max:255',
            'desk_1' => 'required|max:1000',
            'desk_2' => 'required|max:1000',
            'moto_unit_usaha' => 'required|max:1000',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-unit-usaha');
        }

        UnitUsaha::create($validatedData);

        return redirect('/admin/unit-usaha')->with('success', 'Data Unit Usaha berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(UnitUsaha $unitUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitUsaha $unitUsaha)
    {
        $unit_usahaList = UnitUsaha::all();

        return view('Admin.Pages.Unit-Usaha.Update', compact('unitUsaha', 'unit_usahaList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitUsaha $unitUsaha)
    {
        $validatedData = $request->validate([
            'unit_usaha' => 'required|max:255',
            'desk_1' => 'required|max:1000',
            'desk_2' => 'required|max:1000',
            'moto_unit_usaha' => 'required|max:1000',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            if ($unitUsaha->image) {
                Storage::delete($unitUsaha->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('image-unit-usaha');
        }

        $unitUsaha->update($validatedData);

        return redirect('/admin/unit-usaha')->with('success', 'Data Unit Usaha berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitUsaha $unitUsaha, EventUnitUsaha $eventUnitUsaha )
    {
        // Check if the Organisasi has any associated events (EventOrganisasi)
        if ($unitUsaha->events) {
            // Loop through the associated events to delete their images (if they have any)
            foreach ($unitUsaha->events as $event) {
                if ($event->image) {
                    Storage::delete($event->image);
                }
            }
        }

        // Delete the Organisasi and its associated events (EventOrganisasi) due to cascade delete
        $unitUsaha->delete();

        return back()->with('success', 'Data Unit Usaha berhasil dihapus!');
    }
    
}
