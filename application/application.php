<?php


ob_start();
include(__DIR__.'/template/default.php');
$template=ob_get_clean();



$test=new \PHPComponent\Template($template);



$test->registerCustomTag('elbiniou-cardpanel', function($content, $node) {
    $component=new \Elbiniou\Dashboard\Component\CardPanel();
    $component->loadFromDOMNode($node);
    return $component->render();
});


$test->registerCustomTag('elbiniou-panel', function($content, $node) {
    $component=new \Elbiniou\Dashboard\Component\Panel();
    $component->loadFromDOMNode($node);
    return $component->render();
});



//$test->setVariable('content', '::Variable mustache "content"::');
/*
$test->registerCustomTag('phi-component', function() {
    return '{{{Contenu texte}}}';
});
*/
echo $test->render();
echo '<hr/>';
