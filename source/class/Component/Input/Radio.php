<?php

namespace Elbiniou\Dashboard\Component\Input;

use Elbiniou\Dashboard\Component;

class Radio extends Component
{


    protected $variableCollection=array(
        'name'=>'checkbox',
        'caption'=>'Button',
        'disabled'=>false,
        'checked' => false,
    );



    public function render($template=null, $values=null, $renderer=null) {

        $checked = '';
        if ($this->getVariable('checked')) {
            $checked = 'checked';
        }

        $disabled = '';
        if ($this->getVariable('disabled')) {
            $disabled = 'disabled';
        }


        $this->template= '<div class="radio">
    <label>
        <input type="radio" name="{{{name}}}" '.$checked.' '.$disabled.' />
        {{{caption}}}
    </label>
</div>';


        return parent::render();

    }
}



