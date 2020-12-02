<?php

namespace App\Http\Controllers;

use App\Caso;
use App\Paciente;
use App\Secuencia;
use Illuminate\Http\Request;
use Auth;

class CasoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $caso = Caso::all()->random(1);
        $paciente = Paciente::all()->random(1);
        if ($caso) {
            # code...
        }
        return view('Practicas.caso', compact('caso', 'paciente'));
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
    public function store(Request $request, Secuencia $secuencia)
    {
        $casoDiagnostico = $request->caso;
        $caso = Caso::find($casoDiagnostico);
        $secuencias = Secuencia::all()->where('caso_id' , '=' , $casoDiagnostico);
        return view('Practicas.respuesta', compact('caso', 'secuencias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(Caso $caso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit(Caso $caso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caso $caso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caso $caso)
    {
        //
    }

    public function validar_respuesta(Request $request)
    {
        //dd(request()->all());

        $id = $_POST['id_final'];
        $secuencias = Secuencia::find($id);

        $plano = $_POST['plano'];
        $tipoSecuencia = $_POST['tipo_secuencia'];
        $te = $_POST['te'];
        $tr = $_POST['tr'];
        $ti = $_POST['ti'];

        if($secuencias->plano == $plano && 
            $secuencias->tipo_secuencia == $tipoSecuencia && 
            $secuencias->te == $te &&
            $secuencias->tr == $tr &&
            $secuencias->ti == $ti ){

            return redirect()->back()->with('alert', 'Bien Hecho!!!');
        }
        else{

            return redirect()->back()->with('alert', 'Respuestas incorrectas');
        }
        
    }
}
