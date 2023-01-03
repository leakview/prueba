<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

use PDF;

class profesorController extends Controller
{
    public function index()
    {
        
        /* $datos['profesor']=Profesor::where('id', '=', 1); */
        

        $datos['profesor']=DB::select('select * from profesors', []);
        
        return view('profesor.index', $datos);
    }

    public function create()
    {
        return view('profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAlumnos = request()->except('_token');
        Profesor::insert($datosAlumnos);
        return redirect('profesor')->with('mensaje', 'profesor agregado');
    }

    public function show($id)
    {
       /*  $datos['alumnos']=DB::table('alumnos')->where('nombre', 'raul')->get();
        return view('alumnos.pdf', $datos); */
        $id = request()->except('_token');

        $alumnos = DB::table('alumnos')->where('profe_nombre', $id)->get();


        $pdf = PDF::loadView('profesor.pdf', ['profesor' =>$alumnos]);
      //  $pdf->loadHTML('<h1>Test</h1>');
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
        $datos['profesors']=DB::select('select * from `profesors` where id_profe=?', [$id]);
        //$profesors = profesor::findOrFail($id);
        return view('profesor.edit',$datos );
    }

    public function update(Request $request, $id)
    {
        $datosAlumnos = request()->except(['_token', '_method']);

       
        //$Alumnos = profesor::findOrFail($id);    
            
        DB::table('profesors')->where('id_profe', $id)->update($datosAlumnos);
       // profesor::where('id_profe', '=', $id_profe)
        //$alumnos = profesor::findOrFail($id_profe);

        //return view('alumnos.edit', compact('alumnos') );

        return redirect('/profesor')->with('profesor', 'profesor actualizado');
    
    }


}
