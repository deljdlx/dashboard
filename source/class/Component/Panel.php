<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class Panel extends Component
{


    protected $variableCollection = array(
        'title'=>'Title',
        'icon'=>'fa-bell',
    );


    public function render()
    {


        $this->template = '
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa {{{icon}}} fa-fw"></i> {{{title}}}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    {{{content}}}
                </div>
                <!-- /.panel-body -->
            </div>
        ';


        return parent::render();

    }
}
