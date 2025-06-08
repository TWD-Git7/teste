<?php

namespace App\Http\Controllers\Bolsa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BolsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('painel.bolsa.bolsasdisponiveis');
    }

    public function showBolseiros()
    {
        return view('painel.bolsa.listaBolseiros');
    }

    public function showSolicitacoes()
    {
        return view('painel.bolsa.listaSolicitacoes');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
