<?php

namespace Elbiniou\Dashboard\Component;

use Elbiniou\Dashboard\Component;

class DonutChart extends Component
{


    protected $variableCollection = array(
        'height' => '500px',
        "title"=>'Donut chart',
        "serie"=>array (
            'name' => 'Exemple',
            'values' =>array (
                'Série 1'=> 20,
                'Série 2'=> 30,
                'Série 3'=> 40,
                'Série 4'=> 50,
                'Série 5'=> 60,
                'Série 6'=> 70,
            ),
        )
    );


    public function render($template = null, $values = null, $renderer=null)
    {

        $this->initializeRendering($template, $values, $renderer);
        $values=$this->getVariable('serie');


        $structureValues=array();
        foreach ($values['values'] as $caption=>$value) {
            $structureValues[]=array(
                'name'=>$caption,
                'value'=>$value
            );
        }


        $template = '<div id="{{{elementID}}}" style="height: {{{height}}};"></div>';

        $this->addJavascript('
            (function() {
                var myChart = echarts.init(document.getElementById(\''.$this->getVariable('elementID').'\'));
                // specify chart configuration item and data
                option = {
                    tooltip: {
                        trigger: "item",
                        formatter: "{a} <br/>{b}: {c} ({d}%)"
                    },
                    legend: {
                        orient: "vertical",
                        x: "left",
                        data: '.json_encode(array_keys($values['values'])).'
                    },
                    series: [
                        {
                            name:"'.$this->getVariable('title').'",
                            type:"pie",
                            radius: ["50%", "70%"],
                            avoidLabelOverlap: false,
                            label: {
                                normal: {
                                    show: false,
                                    position: "center"
                                },
                                emphasis: {
                                    show: true,
                                    textStyle: {
                                        fontSize: "30",
                                        fontWeight: "bold"
                                    }
                                }
                            },
                            labelLine: {
                                normal: {
                                    show: false
                                }
                            },
                            data:'.json_encode($structureValues).'
                        }
                    ]
                };
                // use configuration item and data specified to show chart
                myChart.setOption(option);

            })();
            </script>
        ');


        $content = parent::render($template, $values, $renderer);
        return $content;

    }
}
