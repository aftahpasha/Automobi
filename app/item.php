<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
  protected $fillable = ['kategori', 'merek', 'tipe', 'isi', 'harga', 'file'];
  protected $hidden = ['created_at', 'updated_at'];
}
