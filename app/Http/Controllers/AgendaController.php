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
        return view('agenda.index');
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
        $Agenda = new Agenda;
        $Agenda->nombres = $request->nombres;
        $Agenda->apellidos = $request->apellidos;
        $Agenda->telefono = $request->telefono;
        $Agenda->celular = $request->celular;
        $Agenda->sexo = $request->sexo;
        $Agenda->email = $request->email;
        $Agenda->posicion = $request->posicion;
        $Agenda->departamento = $request->departamento;
        $Agenda->salario = $request->salario;
        $Agenda->fechadenacimiento = $request->fechadenacimiento;
        $Agenda->save();
        return redirect()->route('agenda.index')->with('datos', 'Registro guardado correctamente!');
        // return 'Registro guardado correctamente!';
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
