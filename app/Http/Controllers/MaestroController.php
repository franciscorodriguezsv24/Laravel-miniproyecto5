<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros/index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("maestros/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "Nombre" => ["requiered"],
            "Correo" => ["requiered"],
            "Direccion" => ["requiered"],
            "fecha_de_nacimiento" => ["requiered"],


        ]);

        Maestro::create([
            "Nombre" => $request->Nombre,
            "Correo" => $request->Correo,
            "Direccion" => $request->Direccion,
            "fecha_de_nacimiento" => $request->fecha_de_nacimiento
        ]);

        return redirect()->route("maestros.index");
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
        $maestro = Maestro::find($id);
        return view("maestros/edit", compact("maestro"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maestro = Maestro::find($id);
        $maestro->id = $request->input('id');
        $maestro->Nombre = $request->input ('Nombre');
        $maestro->Correo = $request->input ('Correo');
        $maestro->Direccion = $request->input ('Direccion');
        $maestro->fecha_de_nacimiento = $request->input ('fecha_de_nacimiento');
        $maestro->save();

        return redirect()->route("maestros.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Maestro::find($id);
        $usuario->delete();
        return redirect()->route("maestros.index");
    }
}
