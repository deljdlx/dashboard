<?php

namespace Elbiniou\Dashboard\Component;
use Elbiniou\Dashboard\Component;

class BarChart extends Component
{


    protected $variableCollection = array(
        'height' => '500px',
        "title"=>'Bar chart',
        "serie"=>array (
            'name' => 'Exemple',
            'captions' =>
                array (
                    0 => 'Test1',
                    1 => 'Test2',
                    2 => 'Test3',
                    3 => 'Test4',
                    4 => 'Test5',
                    5 => 'Test6',
                ),
            'values' =>
                array (
                    0 => 5,
                    1 => 20,
                    2 => 36,
                    3 => 10,
                    4 => 10,
                    5 => 20,
                ),
        )
    );

    public function __construct($template = null)
    {
        parent::__construct($template);
        $this->template = '<div id="{{{elementID}}}" style="height: {{{height}}};"></div>';
    }


    public function render($template = null, $values = null, $renderer=null)
    {
        $this->initializeRendering($template, $values, $renderer);

        $values=$this->getVariable('serie');


        $this->addJavascript('
            (function() {
                var myChart = echarts.init(document.getElementById(\''.$this->getVariable('elementID').'\'));
                // specify chart configuration item and data
                var option = {
                    title: {
                        text: "'.$this->getVariable('title').'"
                    },
                    tooltip: {},
                    legend: {
                        data:['.json_encode($values['name']).']
                    },
                    xAxis: {
                        data: '.json_encode($values['captions']).'
                    },
                    yAxis: {},
                    series: [{
                        name: '.json_encode($values['name']).',
                        type: "bar",
                        data: [5, 20, 36, 10, 10, 20]
                    }]
                }
                myChart.setOption(option);
            })();
            </script>
        ');


        $content = parent::render($template, $values, $renderer);
        return $content;

    }
}
