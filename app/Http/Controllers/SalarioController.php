<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalarioController extends Controller
{
    
    public function calcSal($dias, $diaria){
        if($dias < 0 || $diaria < 0)
            echo "A quantidade de dias trabalhados e/ou o valor da diária não pode ser negativo.";
        else{
            $salario = $dias * $diaria;
            echo "Quantidade de dias trabalhados: ".$dias."<br>
                Valor da diária: R$ ".$diaria."<br>
                Salário total: R$ ".$salario;
        }
    }

}
