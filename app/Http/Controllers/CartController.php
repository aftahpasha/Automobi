<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\negara;
use App\transaksi;

class CartController extends Controller
{
  public function cart($id){

    $item = item::find($id);
    $nation = negara::all();
    return view('menu/cart',['item' => $item],['negara' => $nation]);

  }
  public function store(Request $request){

            $saving = transaksi::create([
               'nama_depan'=> $request -> nama_depan,
                'nama_belakang'=> $request -> nama_belakang,
                'name' => $request -> username,
                  'email'=> $request -> email,
                        'barang'=> $request -> barang,
                          'harga' => $request -> harga,
                            'alamat' => $request -> alamat,
                              'telfon' => $request -> telfon,
                                'negara' => $request -> negara,
                                  'kota' => $request -> kota,
                                    'kode_pos' => $request -> kode_pos,



              ]);

               return redirect('/sukses');



             }

    public function sukses(){
      $resi = transaksi::all();
      return view('menu/resi', ['resi' => $resi]);

    }
}
