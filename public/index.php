<?php
require_once __DIR__.'/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
$twig = new \Twig\Environment($loader);


$nav = [
    "home" =>[
        "href" => "/",
        "caption" => "Welcome",
        "status" => "active"
    ],
    "contact" =>[
        "href" => "/contact",
        "caption" => "Contact Us",
        "status" => false
    ]
];
echo $twig->render('home.twig', ['name' => 'miller', "nav" => $nav]);