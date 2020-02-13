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

use Illuminate\Support\Facades\Route;

Route::get('/calc/{a}&{b}',function ($a, $b){
    echo $a." + ".$b." = ".($a + $b);
    echo "<br/>";
    echo $a." - ".$b." = ".($a - $b);
    echo "<br/>";
    echo $a." * ".$b." = ".($a * $b);
    echo "<br/>";
    echo $a." / ".$b." = ".($a / $b);
});
