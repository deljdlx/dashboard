<?php

namespace Elbiniou\Dashboard\Component;

class Button extends \PHPComponent\Component
{


    protected $variableCollection=array(
        //'href'=>'javascript:void(0)',

        'href'=>'javascript:void(0)',
        'caption'=>'Button',
        'class'=>'default'

    );



    public function render($template=null, $values=null) {


        $template= '<a href="{{{href}}}" class="btn btn-raised btn-{{{class}}}">{{{caption}}}</a>';


        return parent::render($template, $values);

    }
}