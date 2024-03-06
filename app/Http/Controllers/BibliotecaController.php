<?php

namespace App\Http\Controllers;
use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Biblioteca::all();
        $libros = Biblioteca::all();
        return view('biblioteca.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'Autor' => 'required|max:255',
            'Editorial' => 'required|max:255',
            'precio' => 'required|max:255',
            'libro_code' => 'required'
        ]);
        
        $biblioteca = new Biblioteca();
        $biblioteca->titulo = $request->input('titulo');
        $biblioteca->Autor = $request->input('Autor'); // Asignar el valor del campo Autor del formulario
        $biblioteca->Editorial = $request->input('Editorial');
        $biblioteca->precio = $request->input('precio');
        $biblioteca->libro_code = $request->input('libro_code');
        $biblioteca->save();
        return redirect()->route('biblioteca.index')->with('success', 'Biblioteca creada exitosamente');
        //return redirect()->route('biblioteca.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
