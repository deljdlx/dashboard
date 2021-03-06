<?php

namespace Elbiniou\Dashboard\Component\Card;

use Elbiniou\Dashboard\Component;

class ThreeFooter extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(


        'title' => '$title',
        'subtitle'=>'$subTitle',
        'image'=>'http://www.fillmurray.com/200/350',
        'footer0' => 'footer0',
        'footer1' => 'footer1',
        'footer2' => 'footer2',
        'content-height'=>'auto'
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
