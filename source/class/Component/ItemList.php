<?php

namespace Elbiniou\Dashboard\Component;


class ItemList extends \PHPComponent\Component
{


    protected $variableCollection = array(
        'items' => array()
    );


    public function render($template = null, $values = null)
    {

        $template = '
                    <div class="list-group">
                        {{#items}}
                        <a href="{{{url}}}" class="list-group-item">
                            <i class="fa fa-comment {{{icon}}}"></i> {{{caption}}}
                            <span class="pull-right text-muted small"><em>{{{legend}}}</em>
                                </span>
                        </a>
                        {{/items}}
                    </div>
        ';


        $content = parent::render($template, $values);
        return $content;

    }
}
