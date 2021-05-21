<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Aporte;
use App\Models\Evento;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreAporteRequest;

class AporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aportes.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $eventos = Evento::pluck('name', 'id');
              
        return view('admin.aportes.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAporteRequest $request)
    {
        $aporte = Aporte::create($request->all());
        //eventos es la carpeta donde guarda las imagenes
        $url = Storage::put('eventos', $request->file('file'));
        
        $aporte->image()->create([
            'url' => $url
        ]);
        return redirect()->route('admin.aportes.index', $aporte);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aporte $aporte)
    {
        return view('admin.aportes.show', compact('aporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aporte $aporte)
    {
        //return view('admin.aportes.edit', compact('aporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAporteRequest $request, Aporte $aporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aporte $aporte)
    {
        //
    }
}
