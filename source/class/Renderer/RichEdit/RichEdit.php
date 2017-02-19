<?php

namespace Elbiniou\Dashboard\Renderer;


use Elbiniou\Dashboard\Renderer;
use PHPComponent\Template;


class RichEdit extends Renderer
{


    public function render($instanceBuffer = null, $instance = null, $renderer = null)
    {


        $data = array(
            'instanceID' => $this->getElementID(),
            'dialogID' => 'modal-' . $this->getElementID(),
            'properties' => $instance->getVariables(),
        );


        $dialog = '

        ';


        $output = '<div style="position:relative;" class="componentContainer">' .
            $instanceBuffer .
            '<div style="clear:both"></div>' .
            '<div class="componentContainer" style="position:absolute; top:0; left:0; height:100%; width:100%; background-color:rgba(0,0,0, 0.3)"></div>' .

            $dialog .

            '<script type="elbiniou-dashboard-richEditRenderer">' .
            '' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . ';' .
            '</script>' .
            '</div>';


        $this->addGlobalJavascript(
            file_get_contents(__DIR__ . '/asset/script.js')
        );

        $this->template = $output;


        return parent::render();
    }


}

