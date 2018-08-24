<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\item;
use App\kategori;
use App\transaksi;

class adminController extends Controller
{

  public function admin()
  {
    $ktr= item::all();
    return view('admin/tablecontent', ['ktr' => $ktr]);

  }

public function destroy($id){
       item::destroy($id);
       return redirect('/administrator');
     }

public function create(){
          $kategori = kategori::all();
          return view('admin/create', ['ktrr' => $kategori]);

         }
public function store(Request $request){

           $uploadedFile = $request->file('file');
           $path = $uploadedFile->store('public/files');
            $publicPath = \Storage::url($path);
          $saving = item::create([
             'kategori'=> $request -> kategori,
                'merek'=> $request -> merek,
                   'isi'=> $request -> isi,
                      'tipe'=> $request -> tipe,
                        'harga' => $request -> harga,
                         'file' => $path


            ]);

             return redirect('/administrator');




         }


 public function edit($id)
            {
              $ktr =  kategori::all();
              $item = item::find($id);
          return view('admin/edit', ['item' => $item], ['ktr' => $ktr]);
            }

 public function update(Request $request, $id){

           $uploadedFile = $request->file('file');
             $path = $uploadedFile->store('public/files');
               $publicPath = \Storage::url($path);

              item::find($id)->update([

                'kategori'=> $request -> kategori,
                   'merek'=> $request -> merek,
                      'isi'=> $request -> isi,
                         'tipe'=> $request -> tipe,
                           'harga' => $request -> harga,
                             'file' => $path

               ]);
                  return redirect('/administrator');

            }

  public function transaksi(){
    $trans= transaksi::all();
    return view('/admin/tabletransaksi', ['trans' => $trans]);
  }
}
