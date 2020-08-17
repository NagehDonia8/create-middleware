<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

//    $user = Auth::user();
//    if($user->isAdmin()){
//
//
//        echo "this is Admin";
//
//
//    }
    return view('welcome');
});





Auth::routes();






Route::get('/home', 'HomeController@index');



Route::get('/admin/user/roles' ,[ 'middleware'=>['role' , 'auth' , 'web'],function (){

    return "middleware role";

}]);

Route::get('/admin' , 'AdminController@index');

