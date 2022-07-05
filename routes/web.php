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

Route::get('/', function () {
    return view('welcome');
});
//Routing simple
Route:: get('/page1',function(){
	return  '<h1>Page1</h1>';
});
//Routing paramétrés
Route:: get('/page2/{name}',function($name){
	return  '<h1>Page2'.$name.'</h1>';
});
//Routing paramétrés optionnel
Route::get('/page3/{name?}',function($name=null){
return 'welcome'.$name;
});
//Contrainte sur les lettres
Route::get('/page4/{name?}',function($name=null){
	return  '<h1>Page4'.$name.'</h1>';})
->where('name','[A-Za-z]+');
//Contrainte sur les chiffres
Route::get('/page5/{id?}',function($id=null){
	return  '<h1>Page4'.$id.'</h1>';})
->where('id','[0-9]+');

//Homeconroller
Route::get('/home',[HomeController::class,'index']);