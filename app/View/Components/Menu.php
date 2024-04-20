<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public string $type;
    public $menu = [];
    /**
     * Create a new component instance.
     */
    public function __construct(string $type)
    {
        $this->type = $type;
        $this->loadMenu();
    }

    public function loadMenu()
    {
        $this->menu = [
            [
                'label' => 'Principal',
                'icon' => 'mdi mdi-home menu-icon',
                'type' => 'principal',
                'url' => '/home',
                'dropdown' => null,
            ], [
                'label' => 'Livros',
                'icon' => 'mdi mdi-contacts menu-icon',
                'type' => 'livros',
                'url' => '/livros',
                'dropdown' => null,
            ], [
                'label' => 'Pedidos',
                'icon' => 'mdi mdi-format-list-bulleted menu-icon',
                'type' => 'pedidos',
                'url' => '/pedidos',
                'dropdown' => null,
            ], [
                'label' => 'Leitores',
                'icon' => 'mdi mdi-chart-bar menu-icon',
                'type' => 'leitores',
                'url' => '/leitores',
                'dropdown' => null,
            ], [
                'label' => 'Relatórios',
                'icon' => 'mdi mdi-table-large menu-icon',
                'type' => 'relatorios',
                'url' => '/relatorios',
                'dropdown' => null,
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
