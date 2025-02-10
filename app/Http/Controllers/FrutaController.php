<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    public function index()
    {
        $frutas = Fruta::all();
        return view('fruta.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fruta::create($request->all());
        return redirect()->route('frutas.index');
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
        $fruta = Fruta::findOrFail($id);
        $fruta->delete();
        return redirect()->route('frutas.index')->with('success', 'fruta eliminado con éxito.');
    }
}
