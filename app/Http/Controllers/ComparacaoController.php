<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparacaoController extends Controller
{
    
    public function comparar($n1, $n2){
        if($n1 > $n2)
            echo $n1." é o maior número.";
        else if($n2 > $n1)
            echo $n2." é o maior número.";
        else
            echo $n1." e ".$n2." são números iguais.";
    }

}
