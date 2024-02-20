<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyaRequest;
use App\Http\Requests\UpdateCompanyaRequest;
use App\Models\Companya;

class CompanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->authorizeResource(Companya::class, 'companya');
    }

    public function index()
    {
        return view('companyas.index', [
            'companyas' => Companya::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companyas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyaRequest $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $companya = new Companya();
        $companya->nombre = $validated['nombre'];
        $companya->save();
        session()->flash('success', 'El companya se ha creado correctamente.');
        return redirect()->route('companyas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Companya $companya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companya $companya)
    {
        return view('companyas.edit', [
            'companya' => $companya,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyaRequest $request, Companya $companya)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $companya->nombre = $validated['nombre'];
        $companya->save();
        session()->flash('success', 'El companya se ha editado correctamente.');
        return redirect()->route('companyas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companya $companya)
    {
        $companya->delete();
        return redirect()->route('companyas.index');
    }
}
