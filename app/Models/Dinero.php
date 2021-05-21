<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinero extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function aporte(){
        return $this->belongsTo('App\Models\Aporte');
    }    


}


