<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaController extends Controller
{
    
    public function efetuarSaque($valor){
        if($valor >= 10 && $valor <= 600){
            $cem = $cinquenta = $dez = $cinco = $um = 0;
            echo "Para sacar R$ ".$valor.", devem ser fornecidas: <br>";
            while($valor > 0){
                if($valor >= 100){
                    $cem++;
                    $valor -= 100;
                } else if($valor >= 50){
                    $cinquenta++;
                    $valor -= 50;
                } else if($valor >= 10){
                    $dez++;
                    $valor -= 10;
                } else if($valor >= 5){
                    $cinco++;
                    $valor -= 5;
                } else if($valor >= 1){
                    $um++;
                    $valor -= 1;
                } else{
                    $valor = 0;
                }
            }
            
            if($cem > 0)
                echo "- ".$cem." nota(s) de R$ 100 <br>";
            if($cinquenta > 0)
                echo "- ".$cinquenta." nota(s) de R$ 50 <br>";
            if($dez > 0)
                echo "- ".$dez." nota(s) de R$ 10 <br>";
            if($cinco > 0)
                echo "- ".$cinco." nota(s) de R$ 5 <br>";
            if($um > 0)
                echo "- ".$um." nota(s) de R$ 1";
        } else
            echo "Para realizar o saque, o valor deve ser, no mínimo, R$ 10 e, no máximo, R$ 600.";
    }

}