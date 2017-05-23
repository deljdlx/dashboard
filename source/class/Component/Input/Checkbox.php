<?php

namespace Elbiniou\Dashboard\Component\Input;

use Elbiniou\Dashboard\Component;

class Checkbox extends Component
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


        $this->template= '<div class="checkbox">
								<label>
									<input name="{{{name}}}" '.$checked.' '.$disabled.' type="checkbox"/><span class="checkbox-material" /><span class="check"></span></span>
									{{{caption}}}
								</label>
							</div>';


        return parent::render();

    }
}
