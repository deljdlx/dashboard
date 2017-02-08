<?php

namespace Elbiniou\Dashboard\Component\Renderer;


use Elbiniou\Dashboard\Renderer;
use PHPComponent\Template;


class Debug extends Renderer
{


    public function render($instanceBuffer = null, $instance = null, $renderer = null)
    {

        $dump = '';
        if ($instance instanceof Template) {
            $dump=json_encode($instance->getVariables(), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

            $dump=preg_replace('`^(\s*)"(.*?)":`m', '$1"<span style="color:#A00; font-weight: bold">$2</span>":', htmlentities($dump, ENT_NOQUOTES));
        }

        $this->setVariable('content', $instanceBuffer);
        $this->setVariable('componentClassName', get_class($instance));
        $this->setVariable('instanceID', $instance->getID());
        $this->setVariable('variables', $dump);
        $this->setVariable('elementID', $instance->getVariable('elementID'));
        $this->setVariable('componentOutput', htmlentities($instanceBuffer));

        $this->addGlobalCSS(file_get_contents(__DIR__.'/asset/style.css'));

        $template=$this->includeTemplate(__DIR__.'/asset/template.php');
        return parent::render($template);
    }


}

