<?php

namespace App\Http\Controllers;
use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = Fruta::paginate(6);
        return view('fruta.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $frutas = Fruta::findOrFail($id);
        return view('fruta.edit', compact('frutas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fruta = Fruta::findOrFail($id);

        $fruta->nombre = $request['nombre'];
        $fruta->temporada = $request['temporada'];
        $fruta->precio = $request['precio'];
        $fruta->stock = $request['stock'];
        $fruta->foto = $request['foto'];

        $fruta->save();

        return redirect()->route('frutas.index')->with('success', 'fruta actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
