<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Agendamento;
use App\Funcionario;
use App\Tipo;
use App\Statusagendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct() {
     
         $this->middleware('auth');
    }


    public function index()
    {
        // $modelo = Modelo::orderBy('id')->get();
        // $funcionario = Funcionario::orderBy('id')->get();
        // $tipo = Tipo::orderBy('id')->get();
        // $status_agenda = StatusAgendamento::orderBy('id')->get();
        // $agendamento = Agendamento::orderBy('cliente')->get();
        // return view('agendamento.index')->with('agendamento', $agendamento)->with('modelo', $modelo)->with('tipo', $tipo)->with('status', $status_agenda)->with('funcionario', $funcionario);

        // $funcionario = Funcionario::orderBy('id')->get();
        $agendamento = Agendamento::orderBy('cliente')->get();
        return view('agendamento.index')->with('agendamento', $agendamento);
        // ->with('funcionario', $funcionario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        return redirect('/agendamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        return view('agendamento.edit')->with('agendamento', $agendamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        $agendamento->fill($request->all());
        $agendamento->save();
        session()->flash('mensagem', 'Agendamento atualizado com sucesso!');
        return redirect()->route('agendamento.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        session()->flash('mensagem', 'Agendamento excluído com sucesso!');
        return redirect()->route('agendamento.index');   
    }
}
