<?php
require_once __DIR__.'/../vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello nuevo {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);