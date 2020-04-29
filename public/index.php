<?php
require_once __DIR__.'/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
$twig = new \Twig\Environment($loader);


$nav = [
    "home" =>[
        "href" => "/",
        "caption" => "Welcome",
        "status" => false
    ],
    "contact" =>[
        "href" => "/contact",
        "caption" => "Contact Us",
        "status" => false
    ]
];

if(substr($_SERVER["REQUEST_URI"], 0, 8) == "/contact" ){
    $nav["contact"]["status"] = "active";
    echo $twig->render('contact.twig', ['name' => 'miller', "nav" => $nav]);
}else{
    $nav["home"]["status"] = "active";
    echo $twig->render('home.twig', ['name' => 'miller', "nav" => $nav]);
}