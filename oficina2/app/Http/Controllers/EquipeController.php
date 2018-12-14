<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;
use Illuminate\Support\Facades\Input;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipe = Equipe::orderBy('descricao')->get();
        return view('equipe.index')->with('equipes', $equipe);
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
        $request->merge(['negrito_produt'=>Input::has('negrito_produt')?true:false]);
        $request->merge(['negrito_letra_prog'=>Input::has('negrito_letra_prog')?true:false]);
        // dd($request);
        Equipe::create($request->all());
        return redirect()->route('equipe.index');
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
     * $id
     */

    public function edit(Equipe $equipe)
    {
        //  
        return view('equipe.edit')->with('editar',$equipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        //
        
        $request->merge(['negrito_produt'=>Input::has('negrito_produt')?true:false]);
        $request->merge(['negrito_letra_prog'=>Input::has('negrito_letra_prog')?true:false]);
        //dd($request->all());
        $equipe->fill($request->all());
        $equipe->save();
        return redirect()->route('equipe.index');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        dd($id);
        //dd($equipe->all());
        $equipe->delete();
        return redirect()->route('equipe.index');
    }
}
