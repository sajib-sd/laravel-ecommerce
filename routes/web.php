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
    return view('userPanel.home');
});


Route::get('/about', function () {
    return "THIS IS ABOUT PAGE";
});


Route::get('/product/{slug}', function ($slug) {
    return  response()->json([
        [
            'id' => 1,
            'title' => $slug
            
        ],
        [
            'id' => 2,
            'title' => "Ayna "
            
        ]
    ]);
});
