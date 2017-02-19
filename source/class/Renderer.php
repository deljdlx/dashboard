<?php

namespace Elbiniou\Dashboard;


use Elbiniou\Dashboard\Component;

class Renderer extends Component
{

    public function doAfterRendering($buffer) {

        return $buffer;
    }


}

