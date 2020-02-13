<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculator($o, $a, $b)
    {
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

    }

    public function multiplicationTable($a){
        for ($i = 1; $i <= 10; $i++) {
            echo $a . " * " . $i . " = " . ($a * $i);
            echo "<br/>";
        }
    }
}
