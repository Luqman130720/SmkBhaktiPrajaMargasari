<?php

namespace App\Http\Controllers;

use App\Models\ProspekKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProspekKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProspekKerja $prospekkerja)
    {
        return view('Admin.Pages.Prospek-Kerja.Show',
        [
            'prospekkerja' => $prospekkerja->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Prospek-Kerja.Create');
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
            'introduction' => 'required|max:255',
            'Pekerjaan' => 'required|max:255',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-prospek-kerja');
        }

        ProspekKerja::create($validatedData);

        return redirect('/admin/prospek-kerja')->with('success', 'Data Prospek Kerja berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProspekKerja  $prospekKerja
     * @return \Illuminate\Http\Response
     */
    public function show(ProspekKerja $prospekKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProspekKerja  $prospekKerja
     * @return \Illuminate\Http\Response
     */
    public function edit(ProspekKerja $prospekKerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProspekKerja  $prospekKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProspekKerja $prospekKerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProspekKerja  $prospekKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProspekKerja $prospekKerja)
    {
        if ($prospekKerja->image) {
            Storage::delete($prospekKerja->image);
        }

        $prospekKerja->delete();

        return back()->with('success', 'Data Prospek Kerja berhasil dihapus!');
    }
}
