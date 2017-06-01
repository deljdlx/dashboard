<?php

namespace Elbiniou\Dashboard\Component\Notification;

use Elbiniou\Dashboard\Component;

class Error extends Component
{


    protected $variableCollection=array(
        //'href'=>'javascript:void(0)',

        'href'=>'javascript:void(0)',
        'caption'=>'Error notification',
        'class'=>'default'

    );



    public function render($template=null, $values=null, $renderer=null) {


        $this->template= '
        <div class="alert alert-danger">
            <div class="container-fluid">
                <div class="alert-icon">
                    <i class="material-icons">error_outline</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
        
                <b>{{{caption}}}</b>
            </div>
        </div>';


        return parent::render();

    }
}
