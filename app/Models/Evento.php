<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'slug', 'url', 'body'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }



    //relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    //relacion uno a muchos (inversa)
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion uno a muchos
    public function aportes(){
        return $this->hasMany('App\Models\Aporte');
    }

     //relacion uno a uno
     public function beneficiario(){
        //$profile = Profile::where('user_id', $this->id)->first();
        return $this->hasOne('App\Models\Beneficiario');
    }

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}


