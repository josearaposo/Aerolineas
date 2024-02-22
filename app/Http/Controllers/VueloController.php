<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVueloRequest;
use App\Http\Requests\UpdateVueloRequest;
use App\Models\Aeropuerto;
use App\Models\Companya;
use App\Models\Vuelo;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->authorizeResource(Vuelo::class, 'vuelo');
    }

    public function index()
    {
        return view('vuelos.index', [
            'vuelos' => Vuelo::all(),
            'aeropuertos' => Aeropuerto::all(),
            'companyas' => Companya::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vuelos.create',[
            'vuelos' => Vuelo::all(),
            'aeropuertos' => Aeropuerto::all(),
            'companyas' => Companya::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVueloRequest $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|max:6',
            'aero_salida' =>'required',
            'aero_llegada' =>'required',
            'companya_id' =>'required',
            'hora_salida' =>'required',
            'hora_llegada' =>'required',
            'plazas' =>'required',
            'precio' =>'required',

        ]);
        dd("Prueba");
        $vuelo = new Vuelo();
        $vuelo->codigo = $validated['codigo'];
        $vuelo->aero_salida = $validated['aero_salida'];
        $vuelo->aero_llegada = $validated['aero_llegada'];
        $vuelo->companya_id = $validated['companya_id'];
        $vuelo->hora_salida = $validated['hora_salida'];
        $vuelo->hora_llegada = $validated['hora_llegada'];
        $vuelo->plazas = $validated['plazas'];
        $vuelo->precio = $validated['precio'];
        $vuelo->save();
        session()->flash('success', 'El vuelo se ha creado correctamente.');
        return redirect()->route('vuelos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelo $vuelo)
    {
        return view('vuelos.edit', [
            'vuelo' => $vuelo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevueloRequest $request, Vuelo $vuelo)
    {
        $validated = $request->validate([
            'codigo' => 'required|max:255',
        ]);

        $vuelo->codigo = $validated['codigo'];
        $vuelo->save();
        session()->flash('success', 'El vuelo se ha editado correctamente.');
        return redirect()->route('vuelos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vuelo $vuelo)
    {
        $vuelo->delete();
        return redirect()->route('vuelos.index');
    }
}
