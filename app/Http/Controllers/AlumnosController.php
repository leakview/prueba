<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use PDF;

class AlumnosController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /* $datos['alumnos']=DB::select('select * from `alumnos`', [])->paginate(5);
        return view('alumnos.index', $datos); */

        $datos['alumnos']=alumnos::paginate(3);
        return view('alumnos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['profesors']=DB::select('select * from `profesors`', []);
        return view('alumnos.create', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'carnet'=>'required|string|max:10',
            'grado'=>'required|string|max:30',
            'nombre_padre'=>'required|string|max:100',
            'nombre_madre'=>'required|string|max:100',
            'edad'=>'required|string|max:30',
            'nota_f'=>'required|string|max:30',
            /* 'profe_id'=>'required|string|max:30',
            'foto'=>'required|max:10000|mimes:jpeg' */
        ];
        $mensajes=[
            'required'=>'el :attribute es requerido',
            /* 'foto.required'=>'la foto es requerida', */
        ];
        
        $this->validate($request, $campos, $mensajes);

        //$datosAlumnos = request()->all();
        $datosAlumnos = request()->except('_token');

      

        Alumnos::insert($datosAlumnos);
        //return response()->json($datosAlumnos);
        return redirect('Alumnos')->with('mensaje', 'alumnos agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = DB::table('alumnos')->where('id', $id)->get();
        $pdf = PDF::loadView('alumnos.pdf', ['alumnos' =>$alumnos]);
        return $pdf->stream();
    } 

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos['profesors']=DB::select('select * from `profesors`', []);
        $alumnos = Alumnos::findOrFail($id);
        return view('alumnos.edit', compact('alumnos'),$datos );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'carnet'=>'required|string|max:10',
            'grado'=>'required|string|max:30',
            'nombre_padre'=>'required|string|max:100',
            'nombre_madre'=>'required|string|max:100',
            'edad'=>'required|string|max:30',
            'nota_f'=>'required|string|max:30',
        ];
        $mensajes=[
            'required'=>'el :attribute es requerido',
            
        ];
        
        $this->validate($request, $campos, $mensajes);

        $datosAlumnos = request()->except(['_token', '_method']);
        $Alumnos = Alumnos::findOrFail($id);    

        Alumnos::where('id', '=', $id)->update($datosAlumnos);
        $alumnos = Alumnos::findOrFail($id);
        //return view('alumnos.edit', compact('alumnos') );

        return redirect('/Alumnos')->with('mensaje', 'alumnos actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Alumnos = Alumnos::findOrFail($id); 
       
        Alumnos::destroy($id);
   
       return redirect('/Alumnos')->with('mensaje', 'alumnos eliminado');
    }
}
