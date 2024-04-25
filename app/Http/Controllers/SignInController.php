<?php

namespace App\Http\Controllers;

use App\Models\SignIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SignIn');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 1) {
                return redirect()->intended('/super-admin/dashboard')->with('success', 'Login berhasil sebagai Superadmin.');
            } elseif (auth()->user()->role == 2) {
                return redirect()->intended('/admin/dashboard')->with('success', 'Login berhasil sebagai Admin.');
            }
        }

        return back()->with('loginError', 'Login gagal. Mohon cek kembali username dan password Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login-admin')->with('LogoutSuccess', 'Anda Telah Logout!');
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
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function show(SignIn $signIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function edit(SignIn $signIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SignIn $signIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignIn $signIn)
    {
        //
    }
}
