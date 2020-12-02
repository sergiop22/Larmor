<?php

namespace App\Http\Controllers;

use App\Investigacion;
use Illuminate\Http\Request;
use Image;
use DB;
use Auth;

class InvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request) {
            $query = trim($request->get('search'));
            $investiga = Investigacion::where('titulo', 'LIKE', '%' . $query . '%')->orderBy('id', 'asc')->paginate(10);

            return view('Investigaciones.inicio', ['investiga' => $investiga, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Investigaciones.ingresarInvestigacion');
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
        'titulo'=> 'required',
        'descripcion'=> 'required',
        'contenido'=> 'required',
        'imagen'=> 'required',
        'habilitado'=> 'required',
      ]);
      
        $investigacion  = new Investigacion();
        $investigacion->titulo = $request->input('titulo');
        $investigacion->descripcion = $request->input('descripcion');
        $investigacion->contenido = $request->input('contenido');
        $investigacion->imagen = $request->input('imagen');
        $investigacion->habilitado = $request->input('habilitado');
        $investigacion->save();

      
        return redirect()->route('investigacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function show(Investigacion $investigacion)
    {
        return view('investigaciones.mostrarInvestigacion', compact('investigacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigacion $investigacion)
    {
        return view('Investigaciones.editarInvestigacion', compact('investigacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigacion $investigacion)
    {
        $investigacion->titulo = $request->titulo;
        $investigacion->descripcion = $request->descripcion;
        $investigacion->contenido = $request->contenido;
        $investigacion->imagen = $request->imagen;
        $investigacion->habilitado = $request->habilitado;
        $investigacion->save();
      
        return redirect()->route('investigacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigacion $investigacion)
    {
        $investigacion->delete();
        return redirect()->route('investigacion.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function update_imagen(Request $request)
    {
        
        $id = $_POST['id'];
        $investigacion = investigacion::find($id);

       if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(500, 300)->save(public_path('/img/articulos/' . $filename) );
            DB::table('investigacions')->where('id', $id)->update(['imagen' => $filename]);
        } 



        return redirect()->route('investigacion.index');

    }

    public function busqueda(Request $request)
    {
        if($request) {
            $query = trim($request->get('search'));
            $investiga = Investigacion::where('titulo', 'LIKE', '%' . $query . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(10);
            //$investiga = Investigacion::where('descripcion', 'LIKE', '%' . $query . '%')->orderBy('id', 'asc')->paginate(10);

            return view('Investigaciones.inicio', ['investiga' => $investiga, 'search' => $query]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imagenes()
    {
        return view('Investigaciones.imagenesInvestigacion');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function libros()
    {
        return view('Investigaciones.librosInvestigacion');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function descargas(Request $request)
    {
        //PDF file is stored under project/public/download/info.pdf
       $file= public_path(). '/biblioteca/' . $request->libro . '.pdf'; //biblioteca/2.pdf

       $headers = [
                 'Content-Type' => 'application/pdf',
              ];

       return Response()->download($file, 'descarga.pdf', $headers);
    }
}