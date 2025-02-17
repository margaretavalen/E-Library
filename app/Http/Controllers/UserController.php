<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        // middleware untuk filter user mana yang melakukan fungsi 
        $this->middleware('auth')->except(['index', 'autentikasi', 'signup', 'registrasi']);
    }

    public function index()
    {
        return view('halaman.login');
    }

    public function autentikasi(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ])->validate();

        // mencocokkan password dan username
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return back()->with('error', 'Username dan Password salah');
    }

    public function signup()
    {
        return view('halaman.signup');
    }

    public function registrasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'required'  => ':attribute harus diisi.'
        ]);
        if ($validator->fails()) {
            return redirect()->route('form-signup')->withErrors($validator)->withInput($request->all());
        } else {
            $data = $request->all();
            $user = User::create([
                'nama' => $data['nama'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password']
            ]);
            auth()->login($user);
            return redirect('/')->with('success', "Berhasil registrasi.");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function booklist()
    {
        // menampilkan buku yang dipinjam user
        $lists = Peminjaman::with('buku')->where([
            'iduser' => Auth::id()
        ])->get();
        return view('halaman.booklist', [
            'title' => "booklist",
            'lists' => $lists
        ]);
    }

    public function pinjam(Buku $buku)
    {
        Peminjaman::create([
            'iduser' => Auth::id(),
            'idbuku' => $buku->id,
            'tgl_pinjam' => date("Y-m-d"),
            'tgl_batas_kembali' => date("Y-m-d", strtotime("+7 day"))
        ]);

        return redirect()->route('booklist')->with('success', 'Berhasil dipinjam');
    }

    public function kembalikan($peminjaman, $denda)
    {
        Peminjaman::where("id", $peminjaman)->update([
            "tgl_kembali" => DATE(NOW()),
            "total_denda" => $denda
        ]);
        return redirect()->route('book')->with('success', 'Berhasil dikembalikan');
    }
}
