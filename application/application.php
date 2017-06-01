<?php


ini_set('display_errors', 'on');
error_reporting(E_ALL);

$test=new \Elbiniou\Dashboard\Component\CardPanel();

/*
echo $test->render(null, array(
    'title'=>'hello world'
));
die('EXIT '.__FILE__.'@'.__LINE__);
*/

ob_start();
include(__DIR__.'/template/test3/index.php');
$template=ob_get_clean();


if(isset($_GET['debug'])) {
    \Elbiniou\Dashboard\Component\CircleGauge::setStaticRenderer(function($buffer, $instance) {
        //$renderer=new \Elbiniou\Dashboard\Component\Renderer\Debug();
        $renderer=new \Elbiniou\Dashboard\Renderer\RichEdit();
        return $renderer->render($buffer, $instance);
    });



    \Elbiniou\Dashboard\Component\CardPanel::setStaticRenderer(function($buffer, $instance) {
        //$renderer=new \Elbiniou\Dashboard\Component\Renderer\Debug();
        $renderer=new \Elbiniou\Dashboard\Renderer\RichEdit();
        return $renderer->render($buffer, $instance);
    });


}




$test=new \Phi\Component\Page($template);


$test->registerComponent('db-checkbox', '\Elbiniou\Dashboard\Component\Input\Checkbox');
$test->registerComponent('db-toggle', '\Elbiniou\Dashboard\Component\Input\Toggle');
$test->registerComponent('db-radio', '\Elbiniou\Dashboard\Component\Input\Radio');
$test->registerComponent('db-input', '\Elbiniou\Dashboard\Component\Input\Input');



$test->registerComponent('db-notification-info', '\Elbiniou\Dashboard\Component\Notification\Info');
$test->registerComponent('db-notification-success', '\Elbiniou\Dashboard\Component\Notification\Success');
$test->registerComponent('db-notification-warning', '\Elbiniou\Dashboard\Component\Notification\Warning');
$test->registerComponent('db-notification-error', '\Elbiniou\Dashboard\Component\Notification\Error');







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

