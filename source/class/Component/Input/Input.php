<?php

namespace Elbiniou\Dashboard\Component\Input;

use Elbiniou\Dashboard\Component;

class Input extends Component
{


    protected $variableCollection = array(
        'type' => 'text',
        'name' => 'checkbox',
        'caption' => '',
        'readonly' => false,
        'placeholder' => '',
        'value' => '',
        'floating-label' => false,
        'error' => false,
        'success' => false,
    );


    public function render($template = null, $values = null, $renderer = null)
    {

        $error = '';
        if ($this->getVariable('error')) {
            $error = 'has-error';
        }

        $success = '';
        if ($this->getVariable('success')) {
            $success = 'has-success';
        }

        $disabled = '';
        if ($this->getVariable('readonly')) {
            $disabled = 'readonly';
        }

        $floatingLabel = '';
        if ($this->getVariable('floating-label')) {
            $floatingLabel = 'label-floating';
        }

        $caption = '';
        if ($this->getVariable('caption')) {
            $caption = '<label class="control-label">' . $this->getVariable('caption') . '</label>';
        }

        $this->template = '
            <div class="form-group ' . $floatingLabel . ' '.$error.' '.$success.'">
                ' . $caption . '
                <input type="{{{type}}}" name="{{{name}}}" value="{{{value}}}" placeholder="{{{placeholder}}}" class="form-control" ' . $disabled . '/>
            </div>';


        return parent::render();

    }
}
