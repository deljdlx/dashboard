<?php

namespace Elbiniou\Dashboard\Component;


use Elbiniou\Dashboard\Component;

class CircleGauge extends Component
{

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

        $this->addJavascript('
            var test=new DB_CircleGauge();
            test.render("#' . $this->getVariable('elementID') . '");'
        );

        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php');
    }


    public function render($template = null, $values = null, $renderer = null)
    {
        $this->initializeRendering($template, $values, $renderer);

        if ($this->getVariable('valueCaption') === null) {
            $this->setVariable('valueCaption', $this->getVariable('value') . '%');
        }
        return parent::render($this->template, $values, $renderer);

    }
}
