<?php

namespace App\Observers;

use App\Models\Evento;
use Illuminate\Support\Facades\Storage;

class EventoObserver
{
    /**
     * Handle the Evento "created" event.
     *
     * @param  \App\Models\Evento  $evento
     * @return void
     */
    public function creating(Evento $evento)
    {
        if(! \App::runningInConsole()){
            $evento->user_id = auth()->user()->id;
        }
    }



    public function deleting(Evento $evento)
    {
        if($evento){
            Storage::delete($evento->url);
        }
    }
}