<?php

require_once('View.php');


$template = '<h1>%Hello%, {{ name }}!<h1>';

$data = array(
    'name' => 'Dmitry'
);

$multilang = new Multilang('ru');

$view = new View($template, $data, $multilang);

echo $view->render();
