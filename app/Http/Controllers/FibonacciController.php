<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    
    public function mostrarSequencia(){
        $string = "";
        $t1 = 1;
        $t2 = 0;
        while($t2 < 2584){
            $aux = $t1 + $t2;
            $t1 = $t2;
            $t2 = $aux;
            $string .= $t2." ";
        }
        return $string;
    }

}
