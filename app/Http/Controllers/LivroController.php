<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::paginate(10);

        $title = "Livros";
        $type = "livros";
        $menu = "Livros";

        return view('livros.index', compact('title', 'type', 'menu', 'livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Livros";
        $type = "livros";
        $menu = "Livros";

        return view('livros.create', compact('title', 'type', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|string',
            'numero_de_paginas' => 'required|integer|min:1',
            'editora' => 'required|string',
            'edicao' => 'required|string',
            'data_de_publicacao' => 'required|date',
            'quantidade_existente' => 'required|integer|min:1',

        ], [], []);

        Livro::create($request->all());

        return back()->with('success', 'Feito com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livro = Livro::findOrFail($id);

        $title = "Livros";
        $type = "livros";
        $menu = "Livros";

        return view('livros.show', compact('title', 'type', 'menu', 'livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livro = Livro::findOrFail($id);

        $title = "Livros";
        $type = "livros";
        $menu = "Livros";

        return view('livros.edit', compact('title', 'type', 'menu', 'livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livro = Livro::findOrFail($id);

        $this->validate($request, [
            'titulo' => 'required|string',
            'numero_de_paginas' => 'required|integer|min:1',
            'editora' => 'required|string',
            'edicao' => 'required|string',
            'data_de_publicacao' => 'required|date',
            'quantidade_existente' => 'required|integer|min:1',

        ], [], []);

       $livro->update($request->all());

        return back()->with('success', 'Feito com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = Livro::findOrFail($id);

        $livro->delete();

        return redirect('/livros')->with('success', 'Eliminado com sucesso');
    }
}
