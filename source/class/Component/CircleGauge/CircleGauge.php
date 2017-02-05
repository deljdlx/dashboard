<?php

namespace Elbiniou\Dashboard\Component;

use PHPComponent\Component;

class CircleGauge extends \PHPComponent\Component
{


    protected $variableCollection = array(
        'title'=>'Title',
        'subTitle'=>'Sub title',
        'value'=>'0.5',
        'content'=>'Content',
        'image'=>''
    );


    public function render($template = null, $values = null)
    {


        $template = '
            <div class="circleGraph" data-value="'.$this->getVariable('value').'">
                <div class="graph">
                    <div class="circle">
                        <img src="'.$this->getVariable('image').'" alt="photo">
                    </div>
                    <div class="value">'.$this->getVariable('value').'%</div>

                </div>

                <div class="description">
                    <div class="title">'.$this->getVariable('title').'</div>
                    <div class="legend">'.$this->getVariable('subTitle').'</div>
                    <div class="content">
                        '.$this->getVariable('content').'
                    </div>
                </div>
            </div>
        ';

        $this->addGlobalCSS(file_get_contents(__DIR__.'/asset/style.css'));


        return parent::render($template, $values);

    }
}
