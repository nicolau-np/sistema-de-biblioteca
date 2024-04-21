<?php

namespace App\Http\Controllers;

use App\Models\Leitor;
use Illuminate\Http\Request;

class LeitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leitores = Leitor::paginate(10);

        $title = "Leitores";
        $type = "leitores";
        $menu = "Leitores";

        return view('leitores.index', compact('title', 'type', 'menu', 'leitores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Leitores";
        $type = "leitores";
        $menu = "Leitores";

        return view('leitores.create', compact('title', 'type', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'bi' => 'required|string',
            'genero' => 'required|string',
            'data_nascimento' => 'required|date',
            'origem' => 'required|string',
            'tipo' => 'required|string',
            'telefone' => 'required|string',
        ], [], []);

        Leitor::create($request->all());

        return back()->with('success', "Feito com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $leitor = Leitor::findOrFail($id);

        $title = "Leitores";
        $type = "leitores";
        $menu = "Leitores";

        return view('leitores.show', compact('title', 'type', 'menu', 'leitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $leitor = Leitor::findOrFail($id);

        $title = "Leitores";
        $type = "leitores";
        $menu = "Leitores";

        return view('leitores.edit', compact('title', 'type', 'menu', 'leitor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $leitor = Leitor::findOrFail($id);

        $this->validate($request, [
            'nome' => 'required|string',
            'bi' => 'required|string',
            'genero' => 'required|string',
            'data_nascimento' => 'required|date',
            'origem' => 'required|string',
            'tipo' => 'required|string',
            'telefone' => 'required|string',
        ], [], []);

        $leitor->update($request->all());

        return back()->with('success', "Feito com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leitor = Leitor::findOrFail($id);

        $leitor->delete();

        return redirect('/leitores')->with('success', "Eliminado com sucesso");
    }
}
