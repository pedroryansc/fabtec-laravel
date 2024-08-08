<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function redirecionar(){
        return redirect("https://riodosul.ifc.edu.br/");
    }

}