<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $usuarios = User::all();
        return view("Usuarios/index", ["Usuarios" => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view("Usuarios/create", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nombre" => ["requiered"],
            "email" => ["requiered"],
            "pass" => ["requiered"],
            "rol" => ["requiered"],

        ]);

        User::create([
            "name" => $request->nombre,
            "email" => $request->email,
            "password" => Hash::make($request->pass)
        ])->assignRole($request->rol);

        return redirect()->route("Usuarios.index");
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
        $usuario = User::find($id);
        $roles = Role::all();
        return view("Usuarios/edit", compact("usuario", "roles"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            "name" => ['required'],
            "email" => ['required', 'email']
        ]);

        //1 - Leer el rol que recibe
        $newRol = $request->rol;

        // 2 - traer todos los roles existentes

        $rolesDB = Role::all();
        $rolesNames = [];

        // 3 - Guardo los nombres de los roles en un arreglo. 
        foreach ($rolesDB as $rolDB){
            $rolesNames[] = $rolDB->name;
        }

        // 4- Compruebo de que el rol que he recibido existe en el arreglo de los roles existentes
        $rolExist = in_array($newRol, $rolesNames, true);

        $usuario = User::find($id);
        $usuario->id = $request->input('id');
        $usuario->name = $request->input ('name');
        $usuario->email = $request->input ('email');
        $usuario->save();

        if ($rolExist){
            //remover los roles existentes en el usuario
            foreach ($rolesNames as $rol){
                $usuario->removeRole($rol);
            }

            //asigno el nuevo rol

            $usuario->assignRole($newRol);
        } else {
            return redirect()->route("Usuarios.index", $usuario);
        }
        // $usuario = User::find($id);
        // $usuario->id = $request->input('id');
        // $usuario->name = $request->input ('name');
        // $usuario->email = $request->input ('email');

        return redirect()->route("Usuarios.index", $usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route("Usuarios.index");

    }
}
