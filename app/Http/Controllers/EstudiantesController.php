<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{

    public function index()
    {
       return Estudiante::all();
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $inputs = $request->input();
        $e = Estudiante::create($inputs);
        return response()->json([
            'data'=>$e,
            'mensaje'=>"Estudiante actualizado con exito.",
        ]);

    }


    public function show(string $id)
    {
        $e = Estudiante::find($id);
        if( isset($e)){
            return response()->json([
                'data'=>$e,
                'mensaje'=>"Estudiante encontrado con exito.",
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"No existe el estudiante.",
            ]);
        }
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {
        $e = Estudiante::find($id);
        if( isset($e)){
            $e->nombre =$request->nombre;
            $e->apellido =$request->apellido;
            $e->estudiante_fecnac =$request->estudiante_fecnac;
            $e->estudiante_dni =$request->estudiante_dni;
            $e->estudiante_telf =$request->estudiante_telf;
            $e->email =$request->email;
            $e->foto =$request->foto;


            if( $e->save()){
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>"Estudiante actualizado con exito.",
                ]);
            }else{
                return response()->json([
                    'error'=>true,
                    'mensaje'=>"No se actualizo al estudiante.",
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"No existe el estudiante.",
            ]);
        }
    }


    public function destroy(string $id)
    {
        $e = Estudiante::find($id);
        if( isset($e)){
            $res=Estudiante::destroy($id);
            if($res){
            return response()->json([
                'data'=>$e,
                'mensaje'=>"Estudiante eliminado con exito.",
                ]);
             }else{
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>"Estudiante no existe",
                ]);
             }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"No existe el estudiante.",
            ]);
        }
    }
}

