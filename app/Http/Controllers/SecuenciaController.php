<?php

namespace App\Http\Controllers;

use App\Secuencia;
use App\Protocolo;
use Config;
use Image;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SecuenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocolo = Protocolo::all();
        return view('Protocolos.protocolos', compact('protocolo')); 
        //return view('Protocolos.protocolos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Resonancias.resonancia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre'=> 'required',
        'dx'=> 'required',
        'plano'=> 'required',
        'tipo_secuencia'=> 'required',
        'te'=> 'nullable',
        'tr'=> 'nullable',
        'ti'=> 'nullable',
        'grosor_corte'=> 'required',
        'campo_vision'=> 'nullable',
        'matriz'=> 'nullable',
        'adquisiciones'=> 'nullable',
        'direccion_fase'=> 'nullable',
      ]);


        $secuencia = new Secuencias();
        //$secuencia->id = \Auth::id();
        $secuencia->nombre = $request->input('nombre');
        $secuencia->dx = $request->input('dx');
        $secuencia->plano = $request->input('plano');
        $secuencia->tipo_secuencia = $request->input('tipo_secuencia');
        $secuencia->te = $request->input('te');
        $secuencia->tr = $request->input('tr');
        $secuencia->ti = $request->input('ti');
        $secuencia->grosor_corte = $request->input('grosor_corte');
        $secuencia->campo_vision = $request->input('campo_vision');
        $secuencia->matriz = $request->input('matriz');
        $secuencia->adquisiciones = $request->input('adquisiciones');
        $secuencia->direccion_fase = $request->input('direccion_fase');
        $secuencia->save();

        return redirect()->route('Secuencia.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Secuencia  $secuencia
     * @return \Illuminate\Http\Response
     */
    public function show(Secuencia $secuencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secuencia  $secuencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Secuencia $secuencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secuencia  $secuencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secuencia $secuencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secuencia  $secuencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secuencia $secuencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secuencia  $secuencia
     * @return \Illuminate\Http\Response
     */
    public function prediccion(Request $request)
    {
        
       if($request){
            $imagen = $request->file('resonancia');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(600, 500)->save(public_path('/img/resonancias/' . $filename) );

            //variable imagen a python para predecir
            //$command = scapeshellcmd("python-extract-from-prediccion.py '$imagen'");//no sabemos si este funcione
            $output = shell_exec("python Prediccion.py 2>&1" . escapeshellarg($imagen));
            //$output_array = (array)json_decode($output);
            
            /*$process = new Process(['python', 'Prediccion.py', $imagen]);
            $process->run();

            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
            $process->getOutput();*/
            $adc = substr($output, -4);
            $difusion = substr($output, -9);
            $flair = substr($output, -6);
            $t = substr($output, -3);
            if (strcmp($adc, "ADC\n") === 0) {
                return view('Resonancias.ADC', ['imagen' => $filename]);
            }
            else if (strcmp($difusion, "Difusion\n") === 0){
                return view('Resonancias.difusion', ['imagen' => $filename]);
            }
            else if (strcmp($flair, "Flair\n") === 0) {
                return view('Resonancias.flair', ['imagen' => $filename]);
            }
            else if (strcmp($t, "T1\n") === 0) {
                return view('Resonancias.t1', ['imagen' => $filename]);
            }
            else if (strcmp($t, "T2\n") === 0) {
                return view('Resonancias.t2', ['imagen' => $filename]);
            }
            else {
                return redirect()->back()->with('alert', 'Imposible predecir tu imagen, asegurate de subir una resonancia real');
            }
                  
        }
        
    
        //return view('Resonancias.t1');

    }
}
