<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use illuminate\View\View;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $personajes = Personaje::latest()->get();
        return view('index',['personajes'=> $personajes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate(([
            'nombre' => 'required',
            'raza' => 'required|string',
            'clase' => 'required|string',
            'puntos_de_golpe' => 'required|integer',
            'puntos_de_golpe_temporales' => 'required|integer',
            'trasfondo' => 'required|string',
            'historia' => 'required|string',
            'habilidades_especiales' => 'required|string',
            'objetos_magico' => 'required|string',
        ]));
        
        Personaje::create($request->all());
        
        return redirect()->route('personajes.index')
            ->with('success', 'Personaje creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje): View
    {
        //dd($personaje);
        return view('show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $personaje = Personaje::find($id);
        return view('edit',['personaje'=> $personaje]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje): RedirectResponse
    {
        $request->validate(([
            'nombre' => 'required',
            'raza' => 'required|string',
            'clase' => 'required|string',
            'puntos_de_golpe' => 'required|integer',
            'puntos_de_golpe_temporales' => 'required|integer',
            'trasfondo' => 'required|string',
            'historia' => 'required|string',
            'habilidades_especiales' => 'required|string',
            'objetos_magico' => 'required|string',
        ]));

        $personaje->update($request->all());

        return redirect()->route('personajes.index')
            ->with('success', 'Personaje actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje): RedirectResponse
    {
        $personaje->delete();
        return redirect()->route('personajes.index')
            ->with('success', 'Personaje eliminado exitosamente.');
    }
}
