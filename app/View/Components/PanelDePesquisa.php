<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PanelDePesquisa extends Component
{
    public string $prefixroute;
    /**
     * Create a new component instance.
     */
    public function __construct(string $prefixroute)
    {
        $this->prefixroute = $prefixroute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.panel-de-pesquisa');
    }
}
