<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TesteController;
use App\Http\Controllers\TesteResController;

use App\Http\Controllers\SalarioController;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FabtecController;
use App\Http\Controllers\DivisoesController;
use App\Http\Controllers\ComparacaoController;
use App\Http\Controllers\PesoController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\NumerosController;

use App\Http\Controllers\MedalhistasController;

use App\Http\Controllers\PessoaController;

/*
Route::post('/', function () {
    return ('Pedro como texto e não como a view');
});
*/

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

// Atividades da aula 4

Route::get("/salario2/{dias}/{diaria}", [SalarioController::class, "calcSal"]);

Route::get("/temperatura2/{valor}/{tipo}", [TemperaturaController::class, "converter"])->where("tipo", "[cf]");

Route::get("/ifc2", [SiteController::class, "redirecionar"]);

Route::get("/fabtec2", [FabtecController::class, "redirecionar"])->name("fabtec2");

Route::get("/fabrica2", [FabtecController::class, "redirecionarRota"])->name("fabrica");

Route::prefix("/laravel2")->group(function(){
    Route::get("/route", [DivisoesController::class, "route"]);
    Route::get("/database", [DivisoesController::class, "database"]);
    Route::get("/public", [DivisoesController::class, "public"]);
});

Route::prefix("/php2")->group(function(){
    Route::get("/if", [DivisoesController::class, "if"]);
    Route::get("/for", [DivisoesController::class, "for"]);
    Route::get("/while", [DivisoesController::class, "while"]);
});

Route::get("/maior/{n1}/{n2}", [ComparacaoController::class, "comparar"]);

Route::get("/pesoIdeal/{altura}/{peso}/{genero}", [PesoController::class, "calcPesoIdeal"])->where("genero", "[FMfm]");

Route::get("/saque/{valor}", [CaixaController::class, "efetuarSaque"]);

Route::get("/fibonacci2", [FibonacciController::class, "mostrarSequencia"]);

Route::get("/numeros/{limite}", [NumerosController::class, "calcularNumeros"]);

// Fim das atividades

// Aula 5

Route::resource("/aula5", TesteResController::class); // Faz com que não seja necessário criar uma rota 
                                                    // diferente para cada função do CRUD do Controller

// 1ª Atividade da aula 5

Route::resource("/medalhistas", MedalhistasController::class);

Route::get("/", function(){
    return redirect("/medalhistas");
});

// Fim da atividade

// 2ª Atividade da aula 5

Route::resource("/pessoa", PessoaController::class);

// Fim da atividade