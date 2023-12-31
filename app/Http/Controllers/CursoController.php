<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\CursoMaestro;
use App\Models\Maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $maestros = Maestro::find(1);
        $cursos = Curso::all();
        return  view("cursos/index", compact('maestros', 'cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cursos/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "Clase" => ["requiered"],

        ]);

        Curso::create([
            "Clase" => $request->Clase,
        ]);

        return redirect()->route("cursos.index");
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
    
        $curso = Curso::find($id);
        return view("cursos/edit", compact("curso"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Curso::find($id);
        $alumno->id = $request->input('id');
        $alumno->Clase = $request->input ('Clase');
        $alumno->save();

        return redirect()->route("cursos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Curso::find($id);
        $usuario->delete();
        return redirect()->route("cursos.index");
    }
}
