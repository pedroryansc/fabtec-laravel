<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TesteController;

use App\Http\Controllers\TesteResController;

Route::post('/', function () {
    return ('Pedro como texto e não como a view');
});

/*
Route::get('/', function () {
    return view('pedro');
});
*/

Route::get('/teste', function () {
    return view('welcome');
});

/*
Route::get("/tab/{valor}", function($valor){
    $string = "";
    for($i = 1; $i <= 10; $i++){
        $string .= $valor." x ".$i." = ".($valor * $i)."<br>";
    }
    return ($string);
});
*/

Route::get("/tab/{valor?}", function($valor = 2){
    $string = "";
    for($i = 1; $i <= 10; $i++){
        $string .= $valor." x ".$i." = ".($valor * $i)."<br>";
    }
    return ($string);
});

Route::get("/parametro/{letra}/{numero}", function($letra, $numero){
    return ($letra.$numero);
})->where("letra", "[A-z]+")->where("numero", "[0-9]+");

Route::get("/rota1", function(){
    return ("Rota 1");
});

Route::get("/novarota", function(){
    return redirect("/rota1");
});

Route::get("/um", function(){
    return redirect()->route("dois");
})->name("um");

Route::get("/dois", function(){
    return redirect()->route("um");
})->name("dois");

// Atividades da lista da aula 2

Route::get("/fibonacci", function(){
	$string = "";
    $t1 = 1;
    $t2 = 0;
    while($t2 < 2584){
        $aux = $t1 + $t2;
        $t1 = $t2;
        $t2 = $aux;
        $string .= $t2."<br>";
    }
    return $string;
});

Route::get("/salario/{dias}/{diaria}", function($dias, $diaria){
    if($dias < 0 || $diaria < 0)
        echo "Valores de dias/diária não podem ser negativos";
    else{
        echo "Quantidade de dias trabalhados: ".$dias."<br>";
        echo "Valor recebido por dia: R$ ".$diaria."<br>";
        echo "Valor total recebido: R$ ".($dias * $diaria);
    }
});
    
Route::get("/temperatura/{valor}/{tipo}", function($valor, $tipo){
    if($tipo == "c"){
        $temp = $valor * (9 / 5) + 32;
        return $valor." °C = ".$temp." °F";
    } else{
        $temp = ($valor - 32) * (9 / 5);
        return $valor." °F = ".$temp." °C";
    }
})->where("tipo", "[c, f]");
    
Route::get("/ifc", function(){
    return redirect("https://riodosul.ifc.edu.br/");
});
    
Route::get("/fabtec", function(){
    return redirect("http://fabricadetecnologias.ifc-riodosul.edu.br/");
})->name("fabtec");
    
Route::get("/fabrica", function(){
    return redirect()->route("fabtec");
})->name("fabrica");
    
Route::prefix("/laravel")->group(function(){
    Route::get("/route", function(){
        return "/route";
    });
    Route::get("/database", function(){
        return "/database";
    });
    Route::get("/public", function(){
        return "/public";
    });
});
    
Route::prefix("/php")->group(function(){
    Route::get("/if", function(){
        return "/if";
    });
    Route::get("/for", function(){
        return "/for";
    });
    Route::get("/while", function(){
        return "/while";
    });
});

// Fim das atividades

// Aula 3

Route::get("/teste2", function(){
    return ("get");
});

Route::post("/teste2", function(){
    return ("post");
});

Route::put("/teste2", function(){
    return ("put");
});

Route::patch("/teste2", function(){
    return ("patch");
});

Route::delete("/teste2", function(){
    return ("delete");
});

// Aula 4

Route::get("/controlador", [TesteController::class, "index"]);

Route::get("/tabnovo/{t?}", [TesteController::class, "tabela"]);

// Aula 5

Route::resource("/aula5", TesteResController::class); // Faz com que não seja necessário criar uma rota 
                                                    // diferente para cada função do CRUD do Controller

 