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
    // ↓返り値、viewのwelcome
    return view('welcome');
});


Route::get('/archives/', function() {
    return view('archives.index');
});

Route::get('/archives/{category}/', function($category){
    return view('archives.category', ['category'=>$category]);
});

  // urlを直接売ってもjoinにいけない、postで入らないといけない
Route::post('/join/', function(){
    return '入会申し込み完了';
});

  // urlを叩いてもリダイレクトでトップページに戻る
Route::get('/join/', function(){
    return redirect()->to('/');
});

Route::get('/{id}/', function($id) {
    return $id . 'のページです';
});

