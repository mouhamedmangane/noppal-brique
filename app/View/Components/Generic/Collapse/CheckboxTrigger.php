<?php

namespace Npl\Brique\View\Components\Generic\Collapse;

use Illuminate\View\Component;

class CheckboxTrigger extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.generic.collapse.checkbox-trigger');
    }
}
