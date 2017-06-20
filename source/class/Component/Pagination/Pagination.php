<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Pagination extends Component
{


    protected $variableCollection = array(
        'items' => '',
    );


    public function render($template = null, $values = null, $renderer = null)
    {


        $this->template='
            <ul class="pagination pagination-primary">
                <!--
                    color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                -->
                '.$this->getVariable('items').'
            </ul>
        ';


        return parent::render();

    }
}
