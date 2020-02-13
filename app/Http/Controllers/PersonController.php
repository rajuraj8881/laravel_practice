<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getPersons()
    {
        $persons = Person::all();

        foreach ($persons as $person) {
            echo $person->name . " has " . $person->balance . " Taka ";
            echo "<br/>";
        }
    }

    public function transferBalance($amount, $n1, $n2)
    {
        $p1 = Person::where('name', 'Prottoy')->firstOrFail();
        $p2 = Person::where('name', 'Riju')->firstOrFail();

        echo "<h3>Balance Before Transfer:</h3>";
        echo $p1->name . " has " . $p1->balance . " Taka ";
        echo "<br/>";
        echo $p2->name . " has " . $p2->balance . " Taka ";
        echo "<br/>";

        $p1->balance -= $amount;
        $p2->balance += $amount;

        $p1->save();
        $p2->save();
        echo '<br/>';

        echo "<b><i>Transfer Successful</i></b>";

        echo "<h3>Balance After Transfer:</h3>";

        echo $p1->name . " has " . $p1->balance . " Taka ";
        echo "<br/>";
        echo $p2->name . " has " . $p2->balance . " Taka ";
        echo "<br/>";
    }
}
