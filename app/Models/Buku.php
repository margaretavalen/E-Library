<?php

namespace App\Models;

use App\Models\Peminjaman;
use App\Http\Controllers\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
  use HasFactory;
  /**
   * The attributes that are not assignable.
   *
   * @var array<int, string>
   */
  protected $guarded = ['id'];

  public function kategori()
  {
    return $this->belongsTo(Kategori::class, 'kategori_id');
  }

  public function peminjaman()
  {
    return $this->hasMany(Peminjaman::class, 'idbuku');
  }
}
