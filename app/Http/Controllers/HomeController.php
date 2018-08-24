<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\item;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $item = item::all();
      $kategori = kategori::all();
      return view('home', ['kt' => $kategori, 'item' => $item]);

    }

    public function show($kategori)
    {

      $kt = kategori::all();

      $item = item::all()->where('kategori', $kategori);
      return view('single', ['kt' => $kt, 'item'=>$item]);



    }

    public function userPage()
    {
      return view('userpage');
    }

    public function userEdit(Request $req,$id){
      User::find($id)->update([

        'nama_depan'=> $req -> nama_depan,
           'nama_belakang'=> $req -> nama_belakang,
           'name'=> $req -> name,
              'email'=> $req -> email,
                 'telfon'=> $req -> telfon,
                   'alamat' => $req -> alamat,
                     'kota' => $req -> kota,
                     'kode_pos' => $req -> kode_pos

       ]);
          return redirect('/home');

    }


}
