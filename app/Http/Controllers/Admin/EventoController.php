<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Evento;
use App\Models\Categoria;

use Illuminate\Support\Facades\Storage;


use App\Http\Requests\StoreEventoRequest;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorias = Categoria::pluck('name', 'id');
        
        return view('admin.eventos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoRequest $request)
    {

        $evento = Evento::create($request->all());
        $url = Storage::put('eventos', $request->file('file'));

        $evento->image()->create([
            'url' => $url
        ]);
        
        
        
        return redirect()->route('admin.eventos.index', $evento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('admin.eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {

        $this->authorize('author', $evento);

        $categorias = Categoria::pluck('name', 'id');

        return view('admin.eventos.edit', compact('evento', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEventoRequest $request, Evento $evento)
    {

        $this->authorize('author', $evento);

        $evento->update($request->all());

        if($request->file('file')){
            $url = Storage::put('eventos', $request->file('file'));
        
            Storage::delete($evento->url);
        }

        return redirect()->route('admin.eventos.edit', $evento)->with('info', 'actualizado evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $this->authorize('author', $evento);

        $evento->delete();
        return redirect()->route('admin.eventos.index')->with('info', 'evento eliminado');
    }
}
