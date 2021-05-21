<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Evento;
use Carbon\Carbon;


use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        
        
                
        $eventos = Evento::latest('id')->paginate(2);
        //mostrar si esta en fechas 
        //no $fecha  = dd($eventos->created_at->format('y-m-d'));
       $categorias = Categoria::latest('id')->paginate(2);
        return view('home.index', compact('eventos', 'categorias'));
           
     
    }



    public function about(){
        return view('home.about');
    }


    public function contact(){
        return view('home.contact');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactMailable($request->all());
        Mail::to('aynimarka@gmail.com')->send($correo);

        return redirect()->route('contact')->with('info', 'mensaje enviado');
    }

}
