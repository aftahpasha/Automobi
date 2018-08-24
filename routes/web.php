<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cart/{id}', 'CartController@cart');
Route::get('/home/{kategori}', 'HomeController@show');

//ADMIN

Route::get('/administrator', 'adminController@admin');
Route::get('/administrator/transaksi','adminController@transaksi');

//DELETE
Route::delete('/administrator/{id}', 'adminController@destroy');

//INSERT
Route::get('/administrator/create', 'adminController@create');
Route::post('/administrator/store', 'adminController@store');

//UPDATE
Route::get('/administrator/{id}/edit', 'adminController@edit');
Route::put('/administrator/{id}', 'adminController@update');


//Cart
Route::post('/home/cart/beli', 'cartController@store');

//User
Route::get('/user', 'HomeController@userPage');
Route::put('/editUser/{id}', 'HomeController@userEdit');

Route::get('/sukses', 'CartController@sukses');

// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		$data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
		return view('home', $data);
	});
	Route::post('upgrade', function(Request $request){
		if($request->ajax()){
			$msg['success'] = 'false';
			$user = \App\User::find($request->id);
			if($user)
				$user->putRole($request->level);
				$msg['success'] = 'true';
			return response()
				->json($msg);
		}
	});
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin', $data);
	});
});
// Route untuk user yang member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
	Route::get('/', function(){
		return view('member');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
