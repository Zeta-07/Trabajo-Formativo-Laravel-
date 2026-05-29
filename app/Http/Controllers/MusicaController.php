<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class MusicaController extends Controller
{
    public function getMusicas(){
        $musicas = Musica::all();
        return response()->json($musicas);
    }

    public function getMusica($id){
        $musica = Musica::find($id);
        if($musica){
            return response()->json($musica);
        }else{
            return response()->json(['message' => 'Musica no encontrada'], 404);
        }
    }

    public function createMusica(Request $request){
        if($request->nombre && $request->duracion && $request->genero && $request->artista){
            $musica = new Musica();
            $musica->nombre = $request->nombre;
            $musica->duracion = $request->duracion;
            $musica->genero = $request->genero;
            $musica->artista = $request->artista;
            $musica->save();
            return response()->json(['message' => 'Musica creada exitosamente'], 201);
        }else{
            return response()->json(['message' => 'Datos incompletos'], 400);
        } 
    }

    public function updateMusica(Request $request, $id){
        $musica = Musica::find($id);
        if($musica){
            $musica->nombre = $request->nombre;
            $musica->duracion = $request->duracion;
            $musica->genero = $request->genero;
            $musica->artista = $request->artista;
            $musica->save();
            return response()->json(['message' => 'Musica actualizada exitosamente'], 200);
        }else{
            return response()->json(['message' => 'Musica no encontrada'], 404);
        }
    }

    public function deleteMusica($id){
        $musica = Musica::find($id);
        if($musica){
            $musica->delete();
            return response()->json(['message' => 'Musica eliminada exitosamente'], 200);
        }else{
            return response()->json(['message' => 'Musica no encontrada'], 404);
        }
    }
}
