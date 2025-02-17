<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'peminjaman';
    public $timestamps = false;

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'idbuku');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}
