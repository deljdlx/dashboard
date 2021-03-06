<?php

namespace Elbiniou\Dashboard\Component;


use Elbiniou\Dashboard\Component;

class ItemList extends Component
{


    protected $variableCollection = array(
        'items' => array()
    );


    public function render()
    {

        $this->template = '
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


        return parent::render();
    }
}
