<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index(){

        $title = "Relatórios";
        $type = "relatorios";
        $menu = "Relatórios";

        return view('relatorios.index', compact('title', 'type', 'menu'));
    }

    public function predidosFeitosCreate(){
        $title = "Relatórios";
        $type = "relatorios";
        $menu = "Pedidos Feitos";

        return view('relatorios.create-pedidos-feitos', compact('title', 'type', 'menu'));
    }

    public function livrosDaBiblioteca(){

    }

    public function livrosNaoDevolvidos(){

    }

    public function pedidosFeitosPrint(Request $request){
$this->validate($request, [
    'data_inicial'=>'required|date',
    'data_final'=>'required|date'
],[],[]);


    }
}
