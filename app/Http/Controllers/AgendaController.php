<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if($search){
            $contato = Contato::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else {
            $contato = Contato::all();
        }

        return view('contato.index', ['contato' => $contato]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda = new Agenda;

        $agenda->id = $request->id;
        $agenda->nome = $request->nome;
        $agenda->telefone = $request->telefone;
        $agenda->email = $request->email;
        
        $agenda->save();

        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);

        return view('agenda.show', ['agenda' => $agenda]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        $agendaId = array_filter($_SESSION['agenda'], function($array) use ($id) { 
            return ($array['id'] == $id); 
        });
        return view('agenda.edit', ['agenda' => array_values($agendaId)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        session_start();
        $agenda = $_SESSION['agenda'];
        $agendaId = array_filter($agenda, function($array) use ($id) { 
            return ($array['id'] == $id); 
        });
        $agendaId = array_values($agendaId);
        $agendaId[0]['nome'] = $request->input('nome');
        $agendaId[0]['email'] = $request->input('email');
        $agendaId[0]['telefone'] = $request->input('telefone');
        $agenda = array_filter($agenda, function($array) use ($id) { 
            return ($array['id'] != $id); 
        });
        $agenda[] = $agendaId[0];
        $_SESSION['agenda'] = $agenda;
        return redirect()->route('agenda.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::findOrFail($id)->delete();
        return redirect()->route('agenda.index');
    }   
}
