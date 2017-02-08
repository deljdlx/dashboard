<?php

namespace Elbiniou\Dashboard\Component;


use Elbiniou\Dashboard\Component;

class DropDownMenu extends Component
{


    protected $variableCollection = array(
        'title' => 'Title',
        'icon' => 'fa-bell',
        'items' => array()
    );


    public function render($template = null, $values = null, $renderer=null)
    {
        $this->initializeRendering($template, $values, $renderer);
        $template = '
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    {{{title}}}
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu pull-right" role="menu">
                    {{#items}}
                        <li><a href="{{{url}}}">{{{caption}}}</a></li>
                    {{/items}}
                    <!--<li class="divider"></li>//-->
                </ul>
            </div>
        ';


        $content = parent::render($template, $values, $renderer);
        return $content;

    }
}
