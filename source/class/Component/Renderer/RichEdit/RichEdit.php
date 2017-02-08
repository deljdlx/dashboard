<?php

namespace Elbiniou\Dashboard\Component\Renderer;


use Elbiniou\Dashboard\Renderer;
use PHPComponent\Template;


class RichEdit extends Renderer
{


    public function render($instanceBuffer = null, $instance = null, $renderer = null)
    {

        $output=$instanceBuffer;

        $output.='<script type="elbiniou-dashboard">'.
            'var properties='.json_encode($instance->getVariables(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT).';'.
        '</script>';


        return parent::render($output);
    }


}

