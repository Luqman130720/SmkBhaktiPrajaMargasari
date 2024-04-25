<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Fasilitas $fasilitas)
    {
        return view('Admin.Pages.Fasilitas.Show',        
        [
            'fasilitas' => $fasilitas->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Fasilitas.Create');
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
            'fasilitas' => 'required|string|max:255',
            'image' => 'image|file', // Add allowed file types and maximum size
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-fasilitas-sekolah');
        }

        Fasilitas::create($validatedData);
        return redirect('/admin/fasilitas')->with('success', 'Data Fasilitas berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->image) {
            Storage::delete($fasilitas->image);
        }

        $fasilitas->delete();

        return back()->with('success', 'Data Fasilitas berhasil dihapus!');
    }

}
