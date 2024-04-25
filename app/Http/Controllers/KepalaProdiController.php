<?php

namespace App\Http\Controllers;

use App\Models\KepalaProdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KepalaProdi $kepalaProdi)
    {
        return view('Admin.Pages.Kepala-Prodi.Show',        [
            'kepalaProdi' => $kepalaProdi->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Kepala-Prodi.Create');
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
            'name' => 'required|max:255',
            'program_studi' => 'required|max:255',
            'visi_misi' => 'required|max:255',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-ketua-program-studi');
        }

        KepalaProdi::create($validatedData);

        return redirect('/admin/ketua-program-studi')->with('success', 'Data Ketua Program Studi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KepalaProdi  $kepalaProdi
     * @return \Illuminate\Http\Response
     */
    public function show(KepalaProdi $kepalaProdi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KepalaProdi  $kepalaProdi
     * @return \Illuminate\Http\Response
     */
    public function edit(KepalaProdi $kepalaProdi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KepalaProdi  $kepalaProdi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KepalaProdi $kepalaProdi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KepalaProdi  $kepalaProdi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KepalaProdi $kepalaProdi)
    {
        if ($kepalaProdi->image) {
            Storage::delete($kepalaProdi->image);
        }

        $kepalaProdi->delete();

        return back()->with('success', 'Data Ketua Prodi berhasil dihapus!');
    }
}
