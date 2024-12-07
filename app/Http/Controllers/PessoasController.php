<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = [
            'Rômulo',
            'Teste',
            'João',
        ];

        return view('pessoas.index')->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $nomePessoa = $request->input('nome');
            $tipoPessoa = $request->input('tipo');
            $documentoPessoa = $request->input('documento');
            $emailPessoa = $request->input('email');
            $telefonePessoa = $request->input('telefone');

            \DB::insert('INSERT INTO pessoas (nome, tipo, documento, email, telefone) VALUES (?, ?, ?, ?, ?)', [$nomePessoa, $tipoPessoa, $documentoPessoa, $emailPessoa, $telefonePessoa]);
                return redirect('/pessoas');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
