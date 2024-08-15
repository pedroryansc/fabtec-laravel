<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;

class PessoaBDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Pessoa::all();

        return view("pessoaBD.index", ["info"=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pessoaBD.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();

        $pessoa->nome = $request->input("nome");
        $pessoa->email = $request->input("email");

        $pessoa->save();

        return redirect()->route("pessoaBD.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa = Pessoa::find($id);

        return view("pessoaBD.show", ["pessoa"=>$pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa = Pessoa::find($id);

        return view("pessoaBD.edit", ["pessoa"=>$pessoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pessoa = Pessoa::find($id);

        $pessoa->nome = $request->input("nome");
        $pessoa->email = $request->input("email");

        $pessoa->save();

        return redirect()->route("pessoaBD.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa = Pessoa::find($id);

        $pessoa->delete();

        return redirect()->route("pessoaBD.index");
    }
}
