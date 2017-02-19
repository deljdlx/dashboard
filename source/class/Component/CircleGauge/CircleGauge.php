<?php

namespace Elbiniou\Dashboard\Component;


use Elbiniou\Dashboard\Component;
use PHPComponent\DOMDocument;

class CircleGauge extends Component
{

    protected $renderer;
    protected static $staticRenderer;

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'title' => 'Title',
        'subTitle' => 'Sub title',
        'value' => '0.5',
        'valueCaption' => null,
        'content' => 'Content',
        'image' => ''
    );




    public function __construct($template = null)
    {
        parent::__construct($template);

        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/style.css'));
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/jquery-circle-progress/dist/circle-progress.min.js'));
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/CircleGauge.js'));

        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php');
    }






    public function render()
    {

        if ($this->getVariable('valueCaption') === null) {
            $this->setVariable('valueCaption', ($this->getVariable('value')*100) . '%');
        }


        $this->addJavascript('
            var test=new DB_CircleGauge();
            test.render("#' . $this->getVariable('elementID') . '");'
        );

        return parent::render();


    }
}
