<?php

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http;
use Illuminate\Support\Facades\Input;
use Hash;

class UserController extends Controller
{
public function __construct(){
$this->middleware('auth');
}

public function index()
{
$cred = Input::only('email','password');
var_dump($cred);

if(Auth::attempt($cred)){
return Redirect::intended('index');
}else{
$error = "Username or password is incorrect.";
return Redirect::to('/signup');
}
}

public function create()
{
$user = new \App\User;
$user->username = input::get('firstname');
$user->username = input::get('lastname');
$user->username = input::get('username');
$user->email  =   input::get('email');
$user->password = Hash::make(input::get('password'));
$user->designation = input::get('profile_pic');
$user->save();
return view('index');
}
