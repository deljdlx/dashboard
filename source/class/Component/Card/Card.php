<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Card extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'titleTag'=>'h2',
        'image'=>'http://www.fillmurray.com/200/300',
        'title' => 'Here $title',
        'subTitle'=>'Here $subTitle',
        'description' => 'Here $description',

        'footer' => '
            <h4>
                Footer
            </h4>
            <a class="fa fa-fw fa-facebook"></a>
            <a class="fa fa-fw fa-twitter"></a>
            <a class="fa fa-fw fa-linkedin"></a>
            <a class="fa fa-fw fa-google-plus"></a>
        '
    );


    public function __construct($template = null)
    {
        parent::__construct($template);

        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/material-cards.css'));
        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/material-cards-auto-height.css'));

        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/material-card.js'));

        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php');
    }


    public function render()
    {

        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php', $this->getVariables());




        return parent::render();

    }
}
