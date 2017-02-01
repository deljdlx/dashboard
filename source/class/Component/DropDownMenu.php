<?php

namespace Elbiniou\Dashboard\Component;



class DropDownMenu extends \PHPComponent\Component
{


    protected $variableCollection = array(
        'title'=>'Title',
        'icon'=>'fa-bell',
    );


    public function render($template = null, $values = null)
    {





        $template = '
            <div class="btn-group">

                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    {{{title}}}
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        ';


        $content=parent::render($template, $values);
        return $content;

    }
}
