<?php

namespace Elbiniou\Dashboard\Component;


class DatePicker extends \PHPComponent\Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'caption' => 'Date picker',
        'notice' => 'Here a small description',
        'locale'=>'fr',
        'inputName'=>''
    );


    public function render($template = null, $values = null, $renderer=null)
    {

        $this->initializeRendering($template, $values, $renderer);
        $template = $this->includeTemplate(__DIR__ . '/asset/template.php');


        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/css/bootstrap-datepicker3.min.css'));
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/js/bootstrap-datepicker.min.js'));
        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/locales/bootstrap-datepicker.'.$this->getVariable('locale').'.min.js', 'locale'));


        $this->addJavascript('
            $("#'.$this->getVariable('elementID').'").datepicker({
                language: "fr",
                daysOfWeekHighlighted: "0,6",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true
            });
        ');


        return parent::render($template, $values, $renderer);

    }
}
