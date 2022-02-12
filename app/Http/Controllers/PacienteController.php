<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();
        $pacientes->ci = $request->get('ci');
        $pacientes->nombre = $request->get('nombre');
        $pacientes->paterno = $request->get('paterno');
        $pacientes->materno = $request->get('materno');
        $pacientes->edad = $request->get('edad');
        $pacientes->telefono = $request->get('telefono');
        $pacientes->sexo = $request->get('sexo');
        $pacientes->persona = $request->get('persona');
        $pacientes->timestamps = false;
        $pacientes->save();

        return redirect('/pacientes');
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
        $paciente = Paciente::find($id);
        return view('paciente.edit')->with('paciente',$paciente);
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
        $paciente = Paciente::find($id);

        $paciente->ci = $request->get('ci');
        $paciente->nombre = $request->get('nombre');
        $paciente->paterno = $request->get('paterno');
        $paciente->materno = $request->get('materno');
        $paciente->edad = $request->get('edad');
        $paciente->telefono = $request->get('telefono');
        $paciente->sexo = $request->get('sexo');
        $paciente->persona = $request->get('persona');
        $paciente->timestamps = false;
        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect('/pacientes');
    }
}
