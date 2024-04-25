<?php

namespace App\Http\Controllers;

use App\Models\EventOrganisasi;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Organisasi $organisasi)
    {
        return view('Admin.Pages.Organisasi.Show',
        [
            'organisasi' => $organisasi->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Organisasi.Create');
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
            'organisasi' => 'required|max:255',
            'desk_1' => 'required|max:1000',
            'desk_2' => 'required|max:1000',
            'moto_organisasi' => 'required|max:1000',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-organisasi');
        }

        Organisasi::create($validatedData);

        return redirect('/admin/organisasi')->with('success', 'Data Organisasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Organisasi $organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisasi $organisasi)
    {
        $organisasiList = Organisasi::all();

        return view('Admin.Pages.Organisasi.Update', compact('organisasi', 'organisasiList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        $validatedData = $request->validate([
            'organisasi' => 'required|max:255',
            'desk_1' => 'required|max:1000',
            'desk_2' => 'required|max:1000',
            'moto_organisasi' => 'required|max:1000',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            if ($organisasi->image) {
                Storage::delete($organisasi->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('image-organisasi');
        }

        $organisasi->update($validatedData);

        return redirect('/admin/organisasi')->with('success', 'Data Organisasi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */

     public function destroy(Organisasi $organisasi)
    {
        // Check if the Organisasi has any associated events (EventOrganisasi)
        if ($organisasi->events) {
            // Loop through the associated events to delete their images (if they have any)
            foreach ($organisasi->events as $event) {
                if ($event->image) {
                    Storage::delete($event->image);
                }
            }
        }

        // Delete the Organisasi and its associated events (EventOrganisasi) due to cascade delete
        $organisasi->delete();

        return back()->with('success', 'Data Organisasi berhasil dihapus.');
    }
}
