<?php

namespace Elbiniou\Dashboard\Component\Card;

use Elbiniou\Dashboard\Component;

class Flipping extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(

        'header-image'=>'http://lorempixel.com/850/280/nature/2/',
        'title' => '$title',
        'front'=>'$front',
        'front-footer'=>'$front-footer',
        'back'=>'$back',
        'back-footer'=>'$back-footer',
        'image'=>'http://www.fillmurray.com/300/300',

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
