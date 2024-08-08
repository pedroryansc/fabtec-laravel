<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    
    public function converter($temp, $tipo){
        if($tipo == "c"){
            $tipo = "Fahrenheit";
            $sigla = "F";
            $resultado = ($temp * (9 / 5)) + 32;
            echo "Temperatura em Celsius: ".$temp." °C";
        } else{
            $tipo = "Celsius";
            $sigla = "C";
            $resultado = ($temp - 32) * (5 / 9);
            echo "Temperatura em Fahrenheit: ".$temp." °F";
        }
        echo "<br>Temperatura em ".$tipo.": ".$resultado." °".$sigla;
    }

}