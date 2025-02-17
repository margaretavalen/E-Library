<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\BukuAudio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
  function index()
  {
    $data = Buku::paginate(4);
    return view('halaman.index', [
      'title' => "index",
      'data' => $data
    ]);
  }

  function buku()
  {
    // mencari buku yang tidak sedang dipinjam oleh user yang login
    $databuku = Buku::whereDoesntHave('peminjaman', function ($q) {
      $q->where([
        'iduser' => Auth::id(),
        'tgl_kembali' => Null
      ]);
    })->get();
    return view('halaman.book', [
      'title' => "book",
      'databuku' => $databuku
    ]);
  }

  function audio()
  {
    $bukuaudio = BukuAudio::all();
    return view('halaman.audiobook', [
      'title' => "audiobook",
      'bukuaudio' => $bukuaudio
    ]);
  }
}
