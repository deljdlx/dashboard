<?php

namespace Elbiniou\Dashboard\Component\Input;

use Elbiniou\Dashboard\Component;

class Toggle extends Component
{


    protected $variableCollection = array(
        'name' => 'toggle',
        'caption' => 'Toggle',
        'checked' => false,
    );


    public function render($template = null, $values = null, $renderer = null)
    {

        $checked = '';
        if ($this->getVariable('checked')) {
            $checked = 'checked';
        }

        $this->template = '<div class="togglebutton">
				            	<label>
				                	<input type="checkbox" '.$checked.' name="{{{name}}}" />
									{{{caption}}}
				            	</label>
				            </div>';


        return parent::render();

    }
}

