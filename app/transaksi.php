<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public $timestamps = false;
    protected $fillable=['nama_depan','nama_belakang','name','email','barang','harga','alamat','telfon','negara','kota','kode_pos'];
    protected $guarded = ['tanggal_pemesanan'];
}
