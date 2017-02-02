<?php

namespace Elbiniou\Dashboard\Component;


class BarChart extends \PHPComponent\Component
{


    protected $variableCollection = array(
        'height' => '500px',
        'id'=>null,
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


    public function render($template = null, $values = null)
    {

        if(!$this->getVariable('id')) {
            $this->setVariable('id', 'bar-chart-'.uniqid());
        }

        $values=$this->getVariable('serie');


        $template = '
            <div id="{{{id}}}" style="height: {{{height}}};"></div>
            <script>
            var myChart = echarts.init(document.getElementById("{{{id}}}"));
            // specify chart configuration item and data
            var option = {
                title: {
                    text: "{{{title}}}"
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
            };
            </script>
        ';


        $content = parent::render($template, $values);
        return $content;

    }
}
