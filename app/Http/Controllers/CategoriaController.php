<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use PDF;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    //
    public function getCategoria(){
        return response()->json(Alumnos::all(),200);
    }


    public function show($id){
     
           $datos['alumnoin']=DB::table('alumnos')->where('carnet', $id)->get();
            return view('alumnos.see', $datos);
           
       /*  $user = DB::table('alumnos')->where('carnet', $id)->get();
        return response()->json($user,200);  */
        
    }


    public function insertCategoria(Request $request){
        $categoria= Alumnos::create($request->all());
        if(is_null($categoria)){
            return response()->json(['message'=>'No se registro correctamente el registro'],404);
        }
        return response()->json($categoria,200);
    }
    public function updateCategoria(Request $request,$id){
        $categoria = Alumnos::find($id);
        if(is_null($categoria)){
            return response()->json(['message'=>'Registro no encontrado'],404);
        }
        $categoria->update($request->all());
        return response()->json($categoria,200);
    }
    public function deleteCategoria($id){
        $categoria = Alumnos::find($id);
        if(is_null($categoria)){
            return response()->json(['message'=>'Registro no encontrado'],404);
        }
        $categoria->delete();
        return response()->json(['message'=>'Registro Eliminado'],200);
    }


}