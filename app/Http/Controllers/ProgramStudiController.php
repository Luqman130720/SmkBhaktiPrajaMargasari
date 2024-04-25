<?php

namespace App\Http\Controllers;

use App\Models\EventProdi;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProgramStudi $ProgramStudi)
    {
        return view('Admin.Pages.Program-Studi.Show',
        [
            'ProgramStudi' => $ProgramStudi->all(),
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Program-Studi.Create');
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
            'prodi' => 'required|max:255',
            'kepanjangan_prodi'=> 'required|max:255',
            'desk_1'=> 'required|max:1000',
            'desk_2'=> 'required|max:1000',
            'moto_prodi'=> 'required|max:1000',
            'image'=> 'required|image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-kaprodi');
        }

        ProgramStudi::create($validatedData);
        return redirect('/admin/program-studi')->with('success', 'Data Program Studi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kaprodi  $kaprodi
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramStudi $kaprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kaprodi  $kaprodi
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramStudi $kaprodi)
    {
        $kaprodiList = ProgramStudi::all();

        return view('Admin.Pages.Program-Studi.Update', compact('kaprodi', 'kaprodiList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kaprodi  $kaprodi
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Kaprodi $kaprodi)
    // {
    //     dd($request->all());
    // }
    
    public function update(Request $request, ProgramStudi $kaprodi)
    {
        $validatedData = $request->validate([
            'prodi' => 'required|max:255',
            'kepanjangan_prodi'=> 'required|max:255',
            'desk_1'=> 'required|max:1000',
            'desk_2'=> 'required|max:1000',
            'moto_prodi'=> 'required|max:1000',
            'image'=> 'image|file'
        ]);

        if ($request->file('image')) {
            if ($kaprodi->image) {
                Storage::delete($kaprodi->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('image-kaprodi');
        }

        $kaprodi->update($validatedData);

        return redirect('/admin/kaprodi')->with('success', 'Program Studi berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kaprodi  $kaprodi
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(ProgramStudi $kaprodi, EventProdi $eventProdi)
    {
        // Check if the Kaprodi has any associated events (EventProdi)
        if ($kaprodi->eventProdis) {
            // Loop through the associated events to delete their images (if they have any)
            foreach ($kaprodi->eventProdis as $eventProdi) {
                if ($eventProdi->image) {
                    Storage::delete($eventProdi->image);
                }
            }
        }

        // Delete the Kaprodi and its associated events (EventProdi) due to cascade delete
        $kaprodi->delete();

        return back()->with('success', 'Program Studi Terkait Berhasil Dihapus');
    }
}
