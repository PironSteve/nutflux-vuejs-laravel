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

<<<<<<< HEAD

Route::get('/editprofile', function() {
  return view ('EditProfile');

});

Route::get('/catalogue', function() {
  return view ('catalogue');

});
=======
Route::get('/catalogue', function () {
    return view('catalogue');
});
  
  Route::get('/chooseuser', function() {
    return view ('Chooseuser');
  
});
>>>>>>> e498e711745ef7c50b75d490637bd51a93c361a0
