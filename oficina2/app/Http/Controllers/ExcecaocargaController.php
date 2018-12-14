<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excecaocarga;
use Illuminate\Support\Facades\Input;

class ExcecaocargaController extends Controller
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
        $Excecaocarga = Excecaocarga::orderBy('chapa')->get();
        return view('excecaocarga.index')->with('excecaocargas', $Excecaocarga);
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
        //
        
        $request->merge(['produtivo'=>Input::has('produtivo')?true:false]);
        $request->merge(['consultor'=>Input::has('consultor')?true:false]);
        Excecaocarga::create($request->all());
        return redirect()->route('excecaocarga.index');
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
    public function edit($id)
    {
        //
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
        //
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
    }
}
