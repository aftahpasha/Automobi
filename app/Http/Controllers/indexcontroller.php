<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB::class;

class indexcontroller extends Controller
{
    //
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
          //return view('home');
      }
}
