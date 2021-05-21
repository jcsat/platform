<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventoController extends Controller
{
    //protected $dates = ['created_at'];
    public function index(){
        
        //arreglar fecha con started_at y finished_ad
        
              
        $startDate = Carbon::now()->subDays(10);
        $endDate = Carbon::now()->addDays();
        
        $eventos = Evento::latest('id')->whereBetween('created_at', [$startDate, $endDate])->paginate(4);
        //mostrar si esta en fechas 
        //no $fecha  = dd($eventos->created_at->format('y-m-d'));
       
        return view('eventos.index', compact('eventos'));
        
    
    }

    public function show(Evento $evento){

      

        $similares = Evento::where('categoria_id', $evento->categoria_id)
                                                    ->where('id', '!=', $evento->id)
                                                    ->latest('id')
                                                    ->take(4)
                                                    ->get();

        //return $evento;
        return view('eventos.show', compact('evento', 'similares'));
    }

    
}
