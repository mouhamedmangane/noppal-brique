<?php

namespace Npl\Brique\View\Components\Composant;

use Illuminate\View\Component;

class Bouton extends Component
{
    public $name,$url,$type;
    
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.composant.bouton');
    }
}
