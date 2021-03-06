<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Dialog extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'title' => 'Title',
        'content' => 'Content',
        'closeButtonCaption' => 'Close',
    );


    public function render()
    {


        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php');


        //$this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/style.css'));
        //$this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/CircleGauge.js'));

        /*
        $this->addJavascript('
            var test=new DB_CircleGauge();
            test.render("#' . $this->getVariable('elementID') . '");'
        );
        */


        return parent::render();

    }
}
