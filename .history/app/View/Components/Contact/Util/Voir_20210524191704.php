<?php

namespace Npl\Brique\View\Components\Contact\Util;

use Npl\Brique\Models\Telephone;
use Illuminate\View\Component;

class Voir extends Component
{

    public $contact;

    public $tels=['Aucun','Aucun'];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact=$contact;
        $telephones= Telephone::where('contact_id',$contact->id)->get();
        if(count($telephones)){
            $i=0;
            foreach ($telephones as $key => $value) {
                if($value->numero)
                    $this->tels[$i]= \Npl\Brique\Util\NplStringFormat::telephone($value->numero.'',$value->indicatif.'');
                else
                    $this->tels[$i]='Aucun';
                $i++;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.contact.util.voir');
    }
}
