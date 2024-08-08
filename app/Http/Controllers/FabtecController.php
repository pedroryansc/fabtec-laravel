<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabtecController extends Controller
{
    
    public function redirecionar(){
        return redirect("http://fabricadetecnologias.ifc-riodosul.edu.br/");
    }

    public function redirecionarRota(){
        return redirect()->route("fabtec2");
    }

}