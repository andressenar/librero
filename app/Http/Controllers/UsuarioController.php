<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::orderBy('id', 'desc')->get();
        return view('usuario.index', compact('usuario'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $usuario = new usuario();
        $usuario->codigo = $request->codigo;
        $usuario->nombre = $request->nombre;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuario.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        
        
        $usuario->codigo = $request->codigo;
        $usuario->nombre = $request->nombre;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
