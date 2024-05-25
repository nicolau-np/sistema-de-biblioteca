<?php

namespace App\Http\Controllers;

use App\Models\Leitor;
use App\Models\Livro;
use App\Models\PedidoLivro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = PedidoLivro::paginate(10);

        $title = "Pedidos";
        $type = "pedidos";
        $menu = "Pedidos";

        return view('pedidos.index', compact('title', 'type', 'menu', 'pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livros = Livro::all();
        $leitores = Leitor::all();
        $title = "Pedidos";
        $type = "pedidos";
        $menu = "Pedidos";

        return view('pedidos.create', compact('title', 'type', 'menu', 'livros', 'leitores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->validate($request, [
        'leitor_id'=>'required|exists:leitors,id',
        'livro_id'=>'required|exists:livros,id',
        'data_do_pedido'=>'required|date',
       ],[],[]);

       $data =[
        'leitor_id'=>$request->leitor_id,
        'livro_id'=>$request->livro_id,
        'user_id'=>Auth::user()->id,
        'data_do_pedido'=>$request->data_do_pedido,
        'data_de_devolucao'=>$request->data_de_devolucao,
       ];

       PedidoLivro::create($data);

       return back()->with('success', 'Feito com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = PedidoLivro::findOrFail($id);

        $title = "Pedidos";
        $type = "pedidos";
        $menu = "Pedidos";

        return view('pedidos.show', compact('title', 'type', 'menu', 'pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedido= PedidoLivro::findOrFail($id);
        $livros = Livro::all();
        $leitores = Leitor::all();
        $title = "Pedidos";
        $type = "pedidos";
        $menu = "Pedidos";

        return view('pedidos.edit', compact('title', 'type', 'menu', 'livros', 'leitores', 'pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido= PedidoLivro::findOrFail($id);

        $this->validate($request, [
            'leitor_id'=>'required|exists:leitors,id',
            'livro_id'=>'required|exists:livros,id',
            'data_do_pedido'=>'required|date',
           ],[],[]);

           $data =[
            'leitor_id'=>$request->leitor_id,
            'livro_id'=>$request->livro_id,
            'user_id'=>Auth::user()->id,
            'data_do_pedido'=>$request->data_do_pedido,
            'data_de_devolucao'=>$request->data_de_devolucao,
           ];

           $pedido->update($data);

           return back()->with('success', 'Feito com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido= PedidoLivro::findOrFail($id);

        $pedido->delete();

        return redirect('/pedidos')->with('success', "Eliminado com sucesso");
    }

    public function search(Request $request){
        $this->validate($request, [
            'text_pesquisa'=>'required|string',
        ],[],[
            'text_pesquisa'=>'Texto da Pesquida'
        ]);

        $texto_pesquisado = $request->text_pesquisa;

        $pedidos = PedidoLivro::where('data_do_pedido', 'LIKE', "%{$request->text_pesquisa}%")
            ->paginate(40);

        $title = "Pedidos";
        $type = "pedidos";
        $menu = "Pedidos";

        return view('pedidos.search', compact('pedidos', 'texto_pesquisado', 'title', 'type', 'menu'));
    }
}
