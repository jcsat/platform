<?php

namespace App\Policies;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventoPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Evento $evento){
        if($user->id == $evento->user_id){
            return true;
        }else{
            return false;
        }
    }
}
