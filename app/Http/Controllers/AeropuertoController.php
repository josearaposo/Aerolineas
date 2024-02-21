<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAeropuertoRequest;
use App\Http\Requests\UpdateAeropuertoRequest;
use App\Models\Aeropuerto;

class AeropuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->authorizeResource(Aeropuerto::class, 'aeropuerto');
    }

    public function index()
    {
        return view('aeropuertos.index', [
            'aeropuertos' => Aeropuerto::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aeropuertos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAeropuertoRequest $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|max:6',
        ]);

        $aeropuerto = new Aeropuerto();
        $aeropuerto->codigo = $validated['codigo'];
        $aeropuerto->save();
        session()->flash('success', 'El aeropuerto se ha creado correctamente.');
        return redirect()->route('aeropuertos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aeropuerto $aeropuerto)
    {
        return view('aeropuertos.edit', [
            'aeropuerto' => $aeropuerto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAeropuertoRequest $request, Aeropuerto $aeropuerto)
    {
        $validated = $request->validate([
            'codigo' => 'required|max:255',
        ]);

        $aeropuerto->codigo = $validated['codigo'];
        $aeropuerto->save();
        session()->flash('success', 'El aeropuerto se ha editado correctamente.');
        return redirect()->route('aeropuertos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aeropuerto $aeropuerto)
    {
        $aeropuerto->delete();
        return redirect()->route('aeropuertos.index');
    }
}
