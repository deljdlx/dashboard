<?php
require(__DIR__.'/source/class/Autoloader.php');
$autoloader=new \Elbiniou\Dashboard\Autoloader();
$autoloader->addNamespace('Elbiniou\Dashboard', __DIR__.'/source/class');
$autoloader->register();




include(__DIR__.'/vendor/autoload.php');

include(__DIR__.'/application/application.php');








