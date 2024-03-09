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
        $libros = Biblioteca::orderBy('created_at', 'DESC')->get();
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
        // Validación de los datos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'Autor' => 'required|string|max:255',
            'Editorial' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'libro_code' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro en la base de datos
        $biblioteca = new Biblioteca();
        $biblioteca->titulo = $request->titulo;
        $biblioteca->Autor = $request->Autor;
        $biblioteca->Editorial = $request->Editorial;
        $biblioteca->precio = $request->precio;
        $biblioteca->libro_code = $request->libro_code;
        $biblioteca->save();

        // Redireccionar o devolver una respuesta
        return redirect()->route('biblioteca.index')->with('success', 'Libro agregado exitosamente.');
        return redirect()->route('biblioteca.index')->with('error', '¡Error al agregar el libro!');

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
