<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaJSONController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        return view("pessoa.index", ["pessoas"=>$pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pessoa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(file_exists("pessoas.json"))
            $pessoas = json_decode(file_get_contents("pessoas.json"));
        else
            $pessoas = array();

        $idsLista = array_column($pessoas, "id");
        if($idsLista)
            $auto_increment_id = max($idsLista) + 1;
        else
            $auto_increment_id = 1;

        $nome = isset($request->nome) ? $request->nome : "";

        $email = isset($request->email) ? $request->email : "";

        $novaPessoa = ["id"=>$auto_increment_id, "nome"=>$nome, "email"=>$email];

        array_push($pessoas, $novaPessoa);

        $this->salvar($pessoas);

        return redirect()->route("pessoaJSON.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        $registro = [];

        foreach($pessoas as $pessoa){
            if($pessoa->id == $id){
                $registro = $pessoa;
                break;
            }
        }

        return view("pessoa.show", ["registro"=>$registro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        $registro = [];

        foreach($pessoas as $pessoa){
            if($pessoa->id == $id){
                $registro = $pessoa;
                break;
            }
        }

        return view("pessoa.edit", ["registro"=>$registro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));

        for($i = 0; $i < count($pessoas); $i++){
            if($pessoas[$i]->id == $id){
                $nome = isset($request->nome) ? $request->nome : "";

                $email = isset($request->email) ? $request->email : "";

                $pessoas[$i] = ["id"=>$id, "nome"=>$nome, "email"=>$email];
                break;
            }
        }

        $this->salvar($pessoas);

        return redirect()->route("pessoaJSON.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        $novoArray = array();

        foreach($pessoas as $pessoa){
            if($pessoa->id != $id)
                array_push($novoArray, $pessoa);
        }

        $this->salvar($novoArray);

        return redirect()->route("pessoaJSON.index");
    }

    function salvar($pessoas){
        $json = json_encode($pessoas);

        $arquivo = fopen("pessoas.json", "w");

        fwrite($arquivo, $json);
        fclose($arquivo);
    }
}
