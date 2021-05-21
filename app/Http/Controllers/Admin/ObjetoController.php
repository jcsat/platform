<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Objeto;
use App\Models\Evento;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreObjetoRequest;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.objetos.index');
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $eventos = Evento::pluck('name', 'id');

        return view('admin.objetos.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjetoRequest $request)
    {
        $objeto = Objeto::create($request->all());
        
        $url = Storage::put('eventos', $request->file('file'));

        $objeto->image()->create([
            'url' => $url
        ]);
        return redirect()->route('admin.objetos.index', $objeto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Objeto $objeto)
    {
        return view('admin.objetos.show', compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Objeto $objeto)
    {
        //return view('admin.objetos.edit', compact('objeto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objeto $objeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objeto $objeto)
    {
        //
    }
}
