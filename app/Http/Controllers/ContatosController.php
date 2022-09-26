<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtro = request('filtro');
        if ($filtro) {
            $contatos = Contatos::where('nome', 'like', "%{$filtro}%")
                ->orWhere('email', 'like', "%{$filtro}%")
                ->orWhere('telefone', 'like', "%{$filtro}%")
                ->get();
        } else {
            $contatos = Contatos::all();
        }
        return view('contatos.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novo = new Contatos();
        $novo->nome = $request->input('nome');
        $novo->email = $request->input('email');
        $novo->telefone = $request->input('telefone');
        $novo->save();
        return redirect()->route('contatos.index');

        //$novo = Contatos::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contatos = Contatos::findOrFail($id);
        return view('contatos.show', ['contatos' => $contatos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contatos = Contatos::findOrFail($id);
        return view('contatos.edit', ['contatos' => $contatos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = Contatos::findOrFail($id);
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->save();
        return redirect()->route('contatos.index');
        // $c = Contatos::update($request->all());
        //Contatos::findOrFail($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contatos::findOrFail($id)->delete();
        return redirect()->route('contatos.index');
        // Contatos::destroy($id);
    }
}
