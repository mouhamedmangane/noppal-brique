<?php

namespace Npl\Brique\View\Components\Generic\ToolBar;

use Illuminate\View\Component;

class Divider extends Component
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
        return view('components.generic.tool-bar.divider');
    }
}
