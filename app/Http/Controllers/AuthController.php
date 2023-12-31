<?php

namespace App\Http\Controllers;

use App\Models\SKT;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            if ($user->roles == 'admin') {
                Alert::success('Berhasil Login', 'Selamat Datang Admin');
                return redirect()->intended('/');
            } elseif ($user->roles == 'ormas') {
                Alert::success('Berhasil Login', 'Selamat Datang ' . $user->username);
                $skt = SKT::where('ormas_id', $user->id)->first();
                if ($skt) {
                    return redirect('/dashboard-ormas/status-skt');
                } else {
                    return redirect('dashboard-ormas/');
                }
            } else {
                return back();
            }
        }

        return back()->withErrors([
            'password' => 'Username atau password Anda salah',
        ]);
    }

    public function postRegis(Request $request)
    {
        $request->validate([
            'nama_organisasi' => 'nullable|string',
            'nama_ketua' => 'nullable|string',
            'no_sk_pengurus' => 'nullable|string',
            'no_telp' => 'nullable|string',
            'username' => 'required|string|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();

        $user->roles = 'ormas';
        $user->nama_organisasi = $request->nama_organisasi;
        $user->nama_ketua = $request->nama_ketua;
        $user->no_sk_pengurus = $request->no_sk_pengurus;
        $user->no_telp = $request->no_telp;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        $user->save();

        Alert::success('Berhasil Mendaftar', 'Silahkan Login');
        return redirect('/login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
