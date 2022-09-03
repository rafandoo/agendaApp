<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if (isset($_SESSION['agenda'])) {
            $agenda = $_SESSION['agenda'];
        } else {
            $agenda = array();
        }
        return view('agenda.index', ['agenda' => $agenda]);
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
        session_start();
        $novo = array(
            'id' => date('YmdHis'),
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
        );
        $_SESSION['agenda'][] = $novo;
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
        session_start();
        $agendaId = array_filter($_SESSION['agenda'], function($array) use ($id) { 
            return ($array['id'] == $id); 
        });
        return view('agenda.show', ['agenda' => $agendaId]);
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

        return view('agenda.edit', ['agendaId' => $agendaId]);
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
        $agendaId = array_filter($_SESSION['agenda'], function($array) use ($id) { 
            return ($array['id'] == $id); 
        });
        $agendaId = array_values($agendaId);
        $agendaId[0]['nome'] = $request->input('nome');
        $agendaId[0]['email'] = $request->input('email');
        $agendaId[0]['telefone'] = $request->input('telefone');
        $_SESSION['agenda'][$agendaId[0]['id']] = $agendaId[0];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "destroy";
    }
}
