<?php

use Illuminate\Support\Facades\Route;

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

// Route::view('/con' , "contact");


Route::get('/', function () {

        return "WELCOME";
});
//Route::get('/Mo_Allam', function () {
//    return view('index');
//});
//
//

Route::get('first' , 'FirstController@showstring1');
Route::get('second' , 'FirstController@showstring2');
Route::get('third' , 'FirstController@showstring3');
Route::get('fourth' , 'FirstController@showstring4');
Route::get('laravel' , 'FirstController@getindex');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//Route::get('/Fillable' , 'Crudcontroller@create');
 Route::group(['prefix' => 'offers'] , function() {

         Route::get('create' , 'Crudcontroller@create');
         Route::post('store' , 'Crudcontroller@store');


 });
