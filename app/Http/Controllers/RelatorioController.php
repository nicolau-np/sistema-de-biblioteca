<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\PedidoLivro;
use Illuminate\Http\Request;
use PDF;

class RelatorioController extends Controller
{
    public function index()
    {

        $title = "Relatórios";
        $type = "relatorios";
        $menu = "Relatórios";

        return view('relatorios.index', compact('title', 'type', 'menu'));
    }

    public function predidosFeitosCreate()
    {
        $title = "Relatórios";
        $type = "relatorios";
        $menu = "Pedidos Feitos";

        return view('relatorios.create-pedidos-feitos', compact('title', 'type', 'menu'));
    }

    public function livrosDaBiblioteca()
    {
     $livros = Livro::orderBy('titulo', 'asc')->get();

        $pdf = PDF::loadView('relatorios.print.livros-da-biblioteca', compact('livros'))->setPaper('A4', 'normal');
        return $pdf->stream("livros-da-biblioteca.pdf");
    }

    public function livrosNaoDevolvidos()
    {
        $pedidoDeLivros = PedidoLivro::whereNull('data_de_devolucao')->orderBy('data_do_pedido', 'asc')->get();

        $pdf = PDF::loadView('relatorios.print.livros-nao-devolvidos', compact('pedidoDeLivros'))->setPaper('A4', 'normal');
        return $pdf->stream("livros-nao-devolvidos.pdf");
    }

    public function pedidosFeitosPrint(Request $request)
    {
        $this->validate($request, [
            'data_inicial' => 'required|date',
            'data_final' => 'required|date'
        ], [], []);

        $pedidoDeLivros = PedidoLivro::whereBetween('data_do_pedido', [$request->data_inicial, $request->data_final])
            ->orderBy('data_do_pedido', 'asc')
            ->get();

        $dataInicial = date('d-m-Y', strtotime($request->data_inicial));
        $dataFinal = date('d-m-Y', strtotime($request->data_final));
        $pdf = PDF::loadView('relatorios.print.pedidos-feitos', compact('pedidoDeLivros', 'dataInicial', 'dataFinal'))->setPaper('A4', 'normal');
        return $pdf->stream("pedidos-feitos.pdf");
    }
}
