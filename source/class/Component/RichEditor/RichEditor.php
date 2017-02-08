<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;
class RichEditor extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'content' => 'Here some content - ça marche',
    );


    public function render($template = null, $values = null, $renderer=null)
    {

        $this->initializeRendering($template, $values, $renderer);
        $template = '<div id="{{{elementID}}}">{{{content}}}</div>';



        $this->addGlobalCSS('vendor/summernote/dist/summernote.css', true);
        $this->addGlobalJavascript('vendor/summernote/dist/summernote.js', true);


        $this->addJavascript('
                $(document).ready(function() {
                    $("#'.$this->getVariable('elementID').'").summernote();
                });
        ');


        return parent::render($template, $values, $renderer);

    }
}
