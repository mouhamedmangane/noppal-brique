<?php

namespace Npl\Brique\View\Components\Categorie\Util;

use Illuminate\View\Component;

class ListCategorie extends Component
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
        return view('components.categorie.util.list-categorie');
    }
}
