<?php

namespace Npl\Brique\View\Components\Generic\Filters;

use Illuminate\View\Component;
use Npl\Brique\ViewModel\Filter\LigneFilterSelectMd;
class LigneFilterSelect extends Component
{   
    public $ligne;
    /**
     * Create a new  component instance.
     *
     * @return void
     */
    public function __construct(LigneFilterSelectMd $ligne)
    {
        $this->ligne = $ligne;
    } 

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.generic.filters.ligne-filter-select');
    }
}
