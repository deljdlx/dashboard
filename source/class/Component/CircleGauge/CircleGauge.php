<?php

namespace Elbiniou\Dashboard\Component;


class CircleGauge extends \PHPComponent\Component
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


    public function render($template = null, $values = null)
    {

        if ($this->getVariable('valueCaption') === null) {
            $this->setVariable('valueCaption', $this->getVariable('value') . '%');
        }

        $template = $this->includeTemplate(__DIR__ . '/asset/template.php');


        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/style.css'));

        /*
        echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
        echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
        print_r(file_get_contents(__DIR__ . '/asset/jquery-circle-progress/dist/circle-progress.min.js', 'core'));
        echo '</pre>';
        */

        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/jquery-circle-progress/dist/circle-progress.min.js'), 'core');
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/CircleGauge.js'), 'dashboard');

        $this->addJavascript('
            var test=new DB_CircleGauge();
            test.render("#' . $this->getVariable('elementID') . '");'
        );


        return parent::render($template, $values);

    }
}
