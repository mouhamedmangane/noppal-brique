<?php

namespace Npl\Brique\View\Components\Generic\Forms;

use Illuminate\View\Component;

class FormTableLabel extends Component
{
    public $labelText,$required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelText,$required=false)
    {
        $this->labelText = $labelText;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.generic.forms.form-table-label');
    }
}
