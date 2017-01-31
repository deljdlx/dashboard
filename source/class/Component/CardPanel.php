<?php

namespace Elbiniou\Dashboard\Component;

class CardPanel extends \PHPComponent\Component
{


    protected $variableCollection=array(
        'color'=>'green',
        'title'=>'Title',
        'subTitle'=>'Sub-title',
        'linkCaption'=>'Next',
        'icon'=>'fa-tasks'

    );



    public function render($template=null, $values=null) {


        $template= '
            <div class="panel panel-{{{color}}}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  {{{icon}}} fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{{title}}}</div>
                            <div>{{{subTitle}}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">{{{linkCaption}}}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        ';

        return parent::render($template, $values);

    }
}
