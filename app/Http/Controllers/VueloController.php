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

        $validated = $request->validated();
        Vuelo::create($validated);
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
