<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Label extends Component
{



    protected $variableCollection=array(
        'caption'=>'label',
        'class'=>'default'  //default, primary, info, success, warning, danger
    );




    public function render($template=null, $values=null, $renderer=null) {


        $this->template= '<span class="label label-{{{class}}}">{{{caption}}}</span>';


        return parent::render();

    }
}
