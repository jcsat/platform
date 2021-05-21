<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion uno a muchos (inversa)
    public function evento(){
        return $this->belongsTo('App\Models\Evento');
    }

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
