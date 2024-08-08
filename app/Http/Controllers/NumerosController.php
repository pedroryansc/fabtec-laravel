<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumerosController extends Controller
{
    
    public function calcularNumeros($limite){
        if($limite >= 1){
            $soma = 0;
            echo "Números de 1 a ".$limite.": <br>";
            for($i = 1; $i <= $limite; $i++){
                echo $i." ";
                $soma += $i;
            }
            $media = $soma / $limite;
            echo "<br><br>
                Soma dos números: ".$soma."<br>
                Média: ".$media;
        } else
            echo "O número limite deve ser maior ou igual a 1.";
    }

}
