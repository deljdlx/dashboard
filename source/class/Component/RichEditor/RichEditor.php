<?php

namespace Elbiniou\Dashboard\Component;


class RichEditor extends \PHPComponent\Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'content' => 'Here some content - ça marche',
    );


    public function render($template = null, $values = null)
    {


        $template = '<div id="{{{elementID}}}">{{{content}}}</div>';



        //<!-- include summernote css/js-->
        //<link href="vendor/summernote/dist/summernote.css" rel="stylesheet"/>
        //<script src="vendor/summernote/dist/summernote.js"></script>


        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/summernote/dist/summernote.css'));
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/summernote/dist/summernote.js'), 'core');

        /*
        echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
        echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
        print_r(htmlentities(file_get_contents(__DIR__ . '/asset/summernote/dist/summernote.js')));
        echo '</pre>';
        */

        $this->addJavascript('
                $(document).ready(function() {
                    $("#'.$this->getVariable('elementID').'").summernote();
                });
        ');


        return parent::render($template, $values);

    }
}
