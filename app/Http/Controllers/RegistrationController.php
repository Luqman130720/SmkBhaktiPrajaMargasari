<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuperAdmin.Registration.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string',
            'status' => 'required|string',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd(request()->all());

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
        }

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'status' => $request->status,
            'password' => Hash::make($request->password),
            'role' => 2,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Registrasi berhasil! Silakan masuk.');

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
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
{
    $users = User::all(); // Ambil semua data pengguna dari database

    return view('SuperAdmin.Registration.Account.Show', compact('users'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration, $id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('users.show')->with('error', 'Pengguna tidak ditemukan.');
    }

    // Hapus gambar profil jika ada
    if ($user->image) {
        Storage::delete('public/' . $user->image);
    }

    $user->delete();

    return back()->with('success', 'Pengguna berhasil dihapus.');
}
}
