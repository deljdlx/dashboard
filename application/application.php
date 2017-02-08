<?php


ini_set('display_errors', 'on');

ob_start();
include(__DIR__.'/template/test2/index.php');
$template=ob_get_clean();


if(isset($_GET['debug'])) {
    \PHPComponent\Template::setStaticRenderer(function($buffer, $instance) {
        //$renderer=new \Elbiniou\Dashboard\Component\Renderer\Debug();
        $renderer=new \Elbiniou\Dashboard\Component\Renderer\RichEdit();

        return $renderer->render($buffer, $instance);
    });
}




$test=new \PHPComponent\Page($template);



$test->registerComponent('db-cardpanel', '\Elbiniou\Dashboard\Component\CardPanel');

$test->registerComponent('db-panel', '\Elbiniou\Dashboard\Component\Panel');
$test->registerComponent('db-dropdownmenu', '\Elbiniou\Dashboard\Component\DropDownMenu');

$test->registerComponent('db-button', '\Elbiniou\Dashboard\Component\Button');

$test->registerComponent('db-list', '\Elbiniou\Dashboard\Component\ItemList');


$test->registerComponent('db-barchart', '\Elbiniou\Dashboard\Component\BarChart');
$test->registerComponent('db-donutchart', '\Elbiniou\Dashboard\Component\DonutChart');


$test->registerComponent('db-circlegauge', '\Elbiniou\Dashboard\Component\CircleGauge');



$test->registerComponent('db-dialog', '\Elbiniou\Dashboard\Component\Dialog');


$test->registerComponent('db-datepicker', '\Elbiniou\Dashboard\Component\DatePicker');


$test->registerComponent('db-richeditor', '\Elbiniou\Dashboard\Component\RichEditor');



//<a href="javascript:void(0)" class="btn btn-raised active"><code>.active</code></a>

header('Content-type: text/html; charset=utf-8');

echo $test->render();
echo '<hr/>';
