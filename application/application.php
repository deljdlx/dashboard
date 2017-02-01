<?php


ob_start();
include(__DIR__.'/template/test2/index.php');
$template=ob_get_clean();



$test=new \PHPComponent\Template($template);


$test->registerComponent('db-cardpanel', '\Elbiniou\Dashboard\Component\CardPanel');
$test->registerComponent('db-panel', '\Elbiniou\Dashboard\Component\Panel');
$test->registerComponent('db-dropdownmenu', '\Elbiniou\Dashboard\Component\DropDownMenu');

$test->registerComponent('db-button', '\Elbiniou\Dashboard\Component\Button');



//<a href="javascript:void(0)" class="btn btn-raised active"><code>.active</code></a>

echo $test->render();
echo '<hr/>';
