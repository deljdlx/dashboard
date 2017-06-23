<?php

namespace Elbiniou\Dashboard\Component\Card;

use Elbiniou\Dashboard\Component;

class RoundedImage extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(

        'header-image'=>'http://lorempixel.com/850/280/nature/4/',
        'title' => '$title',
        'subtitle'=>'$subTitle',
        'image'=>'http://www.fillmurray.com/200/200',
        'footer' => '$footer',
    );


    public function __construct($template = null)
    {
        parent::__construct($template);
        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/style.css'));
    }


    public function render()
    {

        $this->template = $this->includeTemplate(__DIR__ . '/asset/card.php', $this->getVariables());
        return parent::render();

    }
}
