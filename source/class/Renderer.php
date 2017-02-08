<?php

namespace Elbiniou\Dashboard;


use Elbiniou\Dashboard\Component;

class Renderer extends Component
{

    protected function doAfterRendering($buffer) {

        return $buffer;
    }


}

