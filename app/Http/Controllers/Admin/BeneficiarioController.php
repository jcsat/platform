<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Beneficiario;
use App\Models\Objeto;
use App\Models\Aporte;
use App\Models\Evento;
use App\Models\User;

class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $beneficiario = Beneficiario::all();
        //return $beneficiario;
        
        return view('admin.beneficiarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Evento::pluck('name', 'id');

        return view('admin.beneficiarios.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $beneficiario)
    {
        $aportes = Aporte::where('evento_id', $beneficiario->id)
        ->latest('id')->get();

        $objetos = Objeto::where('evento_id', $beneficiario->id)
        ->latest('id')->get();

        $sumas = collect($aportes)->sum('monto');
        
        return view('admin.beneficiarios.show', compact('beneficiario', 'aportes', 'objetos', 'sumas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficiario $beneficiario)
    {
        //return view('admin.beneficiarios.edit', compact('beneficiario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiario $beneficiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiario $beneficiario)
    {
        //
    }
}
