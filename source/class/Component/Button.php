<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Button extends Component
{


    protected $variableCollection = array(
        //'href'=>'javascript:void(0)',

        'href' => 'javascript:void(0)',
        'caption' => 'Button',
        'class' => 'default',
        'size' => null,
        'type'=>null,

    );


    public function render($template = null, $values = null, $renderer = null)
    {
        switch ($this->getVariable('size')) {
            case "xs": {
                $size = 'btn-xs'; break;
            }
            case "s": {
                $size = 'btn-sm'; break;
            }
            case "l": {
                $size = 'btn-lg'; break;
            }
            default: {
                $size='';
            }
        }

        switch ($this->getVariable('type')) {
            case "rounded": {
                $styleClass = 'btn-round'; break;
            }
            case "icon": {
                $styleClass = 'btn-fab btn-fab-mini btn-round'; break;
            }
            case "l": {
                $size = 'btn-lg'; break;
            }
            default: {
                $styleClass='';
            }
        }



        $this->template = '<a href="{{{href}}}" class="btn btn-{{{class}}} '.$size.' '.$styleClass.' ">{{{caption}}}</a>';


        return parent::render();

    }
}
