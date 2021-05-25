<?php

namespace Npl\Brique\View\Components;
use Illuminate\View\Component;
use Npl\Brique\ViewModel\GenId;

abstract class ComponentWithId  extends Component{

    public $id;

    public function __construct($id=""){
        $this->id = $id;
    }

    public abstract function render();
}