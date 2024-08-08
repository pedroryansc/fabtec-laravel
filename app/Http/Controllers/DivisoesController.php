<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisoesController extends Controller
{
    
    public function route(){
        return "/route 2";
    }

    public function database(){
        return "/database 2";
    }

    public function public(){
        return "/public 2";
    }

    public function if(){
        return "/if 2";
    }

    public function for(){
        return "/for 2";
    }

    public function while(){
        return "/while 2";
    }

}
