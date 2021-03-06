<?php

namespace Npl\Brique\View\Components\Generic\Navs;

use Illuminate\View\Component;
use Npl\Brique\ViewModel\Navs\NavTestClasse;

class NavGroup extends Component
{
    use NavTestClasse; 

    public $name,$icon,$active, $navElementModels;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($navElementModels,$name,$icon="",$active)
    {   
        $this->active = $active;
        $this->icon = $icon;
        $this->name=$name;
        $this->navElementModels = $navElementModels;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.generic.navs.nav-group');
    }
}
