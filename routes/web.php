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
    return view('welcome');
});

Route::get('login', 'AuthController@login')->name('login');
Route::post('logindo', 'AuthController@logindo')->name('login.do');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

// Route::resource('usuarios', 'Form\\Test2Controller')->names('user')->parameters(['usuarios' => 'user']);

/*
Rout::group(['namespace' => 'Form'], function() {
	// Verbo GET:
	Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
	Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
	Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
	Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');

	// Verbo POST:
	Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

	// Verbo PUT/PATCH:
	Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

	// Verbo DELETE:
	Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});
*/