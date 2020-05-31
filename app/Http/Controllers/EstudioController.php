<?php

namespace App\Http\Controllers;

use App\Estudio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEstudio;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view("estudios.estudio",['estudio' => new Estudio()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudio $request)
    {   
        Estudio::create($request->validated());
        $tipoEstudio = $request->input('tipoEstudio');
        $fecha = $request->input('fechaEstudio');
        $repuesta = "El estudio: ".$tipoEstudio." se realizará el ".$fecha;
        return back()->with('status',$repuesta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show(Estudio $estudio)
    {
        return view('estudios.show',['estudio'=>$estudio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $estudio = Estudio::findOrFail($id);
        return view('estudios/editar',['estudio'=>$estudio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEstudio $request, Estudio $estudio)
    {
        $estudio->update($request->validated());
        return back()->with('status',' Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        //
    }


    public function resultadoEstudio(Request $request, Estudio $estudio){
        $request->validate([
            'resultadoEstudio' => 'required|mimes:jpeg,jpg,png,pdf|max:10240', //10mb
        ]);
        $filename = time().".".$request->resultadoEstudio->extension();
        $request->resultadoEstudio->move(public_path(), $filename);
        $estudio->update(['resultadoEstudio'=>$filename,]);
        return back()->with('status',"El resultado del estudio se guardó correctamente");
    }

}
