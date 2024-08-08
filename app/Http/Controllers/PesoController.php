<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesoController extends Controller
{
    
    public function calcPesoIdeal($altura, $peso, $genero){
        if($genero == "F" || $genero == "f"){
            $pesoIdeal = (62.1 * $altura) - 44.7;
            $genero = "Feminino";
        } else{
            $pesoIdeal = (72.7 * $altura) - 58;
            $genero = "Masculino";
        }

        echo "Altura: ".$altura." m <br>
            Peso: ".$peso." kg <br>
            Gênero: ".$genero."<br>
            <br>
            Peso Ideal: ".$pesoIdeal." kg <br><br>";

        if($peso > $pesoIdeal)
            echo "Está acima do peso ideal.";
        else if($peso < $pesoIdeal)
            echo "Está abaixo do peso ideal.";
        else
            echo "Está no peso ideal.";
    }

}
