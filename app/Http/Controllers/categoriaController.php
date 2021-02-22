<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    public function getCategoria(){
        return response() -> json(categoria::all(), 200);
    }

    public function getCategoriaById($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response() -> json(['mensaje' => 'Registro no encontrado'], 404);
        }
        return response() -> json($categoria::find($id), 200);
    }

    public function insertCategoria(Request $req){
        $categoria = categoria::create($req->all());
        return response($categoria, 200);
    }

    public function updateCategoria(Request $req, $id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response() -> json(['mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria -> update($req-> all());
        return response($categoria, 200);
    }

    public function deleteCategoria($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response() -> json(['mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria -> delete();
        return response()->json(['mensaje'=> 'Registro eliminado'], 200);
    }
}
