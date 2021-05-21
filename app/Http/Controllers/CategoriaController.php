<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::latest('id')->paginate(4);
        //return $categorias;
        return view('categorias.index', compact('categorias'));
    }




    public function show(Categoria $categoria){
            
            $eventos = Evento::where('categoria_id', $categoria->id)
                    ->latest('id')->get();
           // return Evento::where('categoria_id', $categoria->id);

       // ->with('eventos', 'categoria')
        return view('categorias.show', compact('eventos', 'categoria'));
 
    }
}
