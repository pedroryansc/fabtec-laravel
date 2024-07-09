<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        return "index";
    }

    public function tabela($t = 2){
        for($x = 0; $x <= 10; $x++)
            echo $t." x ".$x." = ".($t * $x)."<br>";
    }
}
