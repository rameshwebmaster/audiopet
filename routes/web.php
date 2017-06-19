<?php
use Illuminate\Http\Request;
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

//Route for Login
Route::post('/login-form', 'Auth\LoginController@attemptLogin');

//Route For Register
Route::post('/register-form', 'Auth\RegisterController@create');


Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
   
	//Route for user logout
//	Route::get('logout', 'HomeController@logout');
   //Added for user list
   Route::get('/user','UserController@index');
   Route::delete('/user/{id}','UserController@delete')->name('deleteUser');
   	
	    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
