<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTcc extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faleConosco = nomeModel::all();
        return view('home',compact('faleConosco'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faleConosco = new nomeModel();
        $faleConosco->nomeFaleConosco = $request->txtNome;
        $faleConosco->emailFaleConosco = $request->txtEmail;
        $faleConosco->mensagemFaleConosco = $request->txtMensagem;
        $faleConosco->save();
        return view('produto',compact('produtos'));

        // return redirect('faleConosco');
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
