<?php

namespace Elbiniou\Dashboard\Component;

class Panel extends \PHPComponent\Component
{


    protected $variableCollection = array(
        'title'=>'Title',
        'icon'=>'fa-bell',
    );


    public function render($template = null, $values = null)
    {


        $template = '
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


        return parent::render($template, $values);

    }
}
