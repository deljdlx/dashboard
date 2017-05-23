<?php

namespace Elbiniou\Dashboard\Component\Input;

use Elbiniou\Dashboard\Component;

class Input extends Component
{


    protected $variableCollection=array(
        'name'=>'checkbox',
        'caption'=>'',
        'readonly'=>false,
        'placeholder'=>'',
        'value'=>'',
        'floating-label'=>false,
    );



    public function render($template=null, $values=null, $renderer=null) {


        $disabled = '';
        if ($this->getVariable('readonly')) {
            $disabled = 'readonly';
        }

        $floatingLabel = '';
        if ($this->getVariable('floating-label')) {
            $floatingLabel = 'label-floating';
        }

        $caption='';
        if($this->getVariable('caption')) {
            $caption='<label class="control-label">'.$this->getVariable('caption').'</label>';
        }

        $this->template= '
            <div class="form-group '.$floatingLabel.'">
                '.$caption.'
                <input type="text" value="{{{value}}}" placeholder="{{{placeholder}}}" class="form-control" name="{{{name}}}" '.$disabled.'/>
            </div>';


        return parent::render();

    }
}
