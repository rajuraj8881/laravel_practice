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

Route::get('/calc/{o}={a}&{b}', function ($o, $a, $b) {
    if ($o == "add") {
        echo $a . " + " . $b . " = " . ($a + $b);
        echo "<br/>";
    } else if ($o == "sub") {
        echo $a . " - " . $b . " = " . ($a - $b);
        echo "<br/>";
    } else if ($o == "mul") {
        echo $a . " * " . $b . " = " . ($a * $b);
        echo "<br/>";
    } else if ($o == "div") {
        echo $a . " / " . $b . " = " . ($a / $b);
    } else {
        echo "Invalid Operator ";
    }

});

Route::get('/mt/{a}', function ($a) {
    for ($i = 1; $i <= 10; $i++) {
        echo $a . " * " . $i . " = " . ($a * $i);
        echo "<br/>";
    }
});
