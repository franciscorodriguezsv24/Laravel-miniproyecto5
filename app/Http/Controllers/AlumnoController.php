<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

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
        $alumno->fecha_de_nacimiento = $request->input ('fecha_de_nacimiento');
        $alumno->save();

        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
