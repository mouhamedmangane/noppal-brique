<?php

namespace Npl\Brique\View\Components\Produit\Rebut;

use Illuminate\View\Component;

class Nouveau extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.produit.rebut.nouveau');
    }
}
