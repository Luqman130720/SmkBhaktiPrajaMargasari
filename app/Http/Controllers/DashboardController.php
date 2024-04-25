<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use App\Models\Dashboard;
use App\Models\Fasilitas;
use App\Models\Informasi;
use App\Models\UnitUsaha;
use App\Models\EventProdi;
use App\Models\Organisasi;
use App\Models\KepalaProdi;
use App\Models\ProgramStudi;
use App\Models\ProspekKerja;
use Illuminate\Http\Request;
use App\Models\EventUnitUsaha;
use App\Models\EventOrganisasi;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $kaprodis = KepalaProdi::all();
        $prospekkerjas = ProspekKerja::all();
        $informasis = Informasi::all();
        return view('User.Pages.Index', compact('prodis', 'organisasis','unitusahas','kaprodis','prospekkerjas', 'informasis'));
    }

    public function event_prodi($prodi)
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $events = EventProdi::with('ProgramStudi')->where('prodi_id', $prodi)->get();
        $intoduction = ProgramStudi::where('id', $prodi)->get();
        // dd($intoduction);
        return view('User.Pages.Event-Prodi', compact('prodis', 'organisasis','unitusahas','events','intoduction'));
    }
    public function event_organisasi($organisasi)
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $events = EventOrganisasi::with('Organisasi')->where('organisasi_id', $organisasi)->get();
        $intoduction = Organisasi::where('id', $organisasi)->get();
        return view('User.Pages.Event-Organisasi', compact('prodis', 'organisasis','unitusahas','events','intoduction'));
    }
    public function event_unit_usaha($unit_usaha)
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $events = EventUnitUsaha::with('UnitUsaha')->where('unit_usaha_id', $unit_usaha)->get();
        $intoduction = UnitUsaha::where('id', $unit_usaha)->get();
        // dd($intoduction);
        return view('User.Pages.Event-Unit-Usaha', compact('prodis', 'organisasis','unitusahas','events','intoduction'));
    }
    public function prestasi()
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $prestasis = Prestasi::all();
        return view('User.Pages.Prestasi', compact('prodis', 'organisasis','unitusahas','prestasis'));
    }
    public function fasilitas_sekolah()
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        $fasilitass = Fasilitas::all();
        return view('User.Pages.Fasilitas-Sekolah', compact('prodis', 'organisasis','unitusahas','fasilitass'));
    }
    public function tentang_kami()
    {
        $prodis = ProgramStudi::all();
        $organisasis = Organisasi::all();
        $unitusahas = UnitUsaha::all();
        return view('User.Pages.Tentang-Kami', compact('prodis', 'organisasis','unitusahas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
