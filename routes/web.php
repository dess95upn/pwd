<?php

use App\Http\Controllers\MtkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $x = 'Ini adalah halaman About';
    return $x;
});

Route::get('/mtk/addv1', function(){
    $a = 10;
    $b = 30;
    $hasil = $a + $b;
    return $hasil;
});

Route::get('/mtk/addv2/{a}/{b}', function($a, $b){
    $hasil = $a + $b;
    return $hasil;
});

Route::get('/mtk/addv3/{a}/{b}', [MtkController::class, 'addv3']);
Route::get('/mtk/multiply/{a}/{b}', [MtkController::class, 'multiply']);

