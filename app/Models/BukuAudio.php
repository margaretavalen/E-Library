<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BukuAudio extends Model
{
  use HasFactory;
  /**
   * The attributes that are not assignable.
   *
   * @var array<int, string>
   */
  protected $guarded = ['id'];
}
