<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos/index' ,compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "DUI" => ["requiered"],
            "Nombre" => ["requiered"],
            "Correo" => ["requiered"],
            "Direccion" => ["requiered"],
            "nacimiento" => ["requiered"],


        ]);

        Alumno::create([
            "DUI" => $request->DUI,
            "Nombre" => $request->Nombre,
            "Correo" => $request->Correo,
            "Direccion" => $request->Direccion,
            "nacimiento" => $request->nacimiento
        ]);

        return redirect()->route("alumnos.index");
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
        $alumno = Alumno::find($id);
        return view("alumnos/edit", compact("alumno"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->id = $request->input('id');
        $alumno->DUI = $request->input ('DUI');
        $alumno->Nombre = $request->input ('Nombre');
        $alumno->Correo = $request->input ('Correo');
        $alumno->Direccion = $request->input ('Direccion');
        $alumno->nacimiento = $request->input ('nacimiento');
        $alumno->save();

        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Alumno::find($id);
        $usuario->delete();
        return redirect()->route("alumnos.index");
    }
}
