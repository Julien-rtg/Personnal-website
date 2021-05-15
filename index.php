<?php 
require 'vendor/autoload.php';
use Alto\AltoRouter;
$router = new AltoRouter();



$router->setBasePath('/SitePerso'); // SitePerso is the new root

$router->map('GET', '/', 'templates/home.php', 'home'); // map for home need to match an another route for home, /index.php
$router->map('GET', '/presentation', 'templates/presentation.php', 'presentation');
$router->map('GET', '/realisations', 'templates/realisations.php', 'realisations');

$match = $router->match();
if ($match) {
    require 'elements/header.php';
    require $match['target'];
    require 'elements/footer.php';
} else {
    header("HTTP/1.0 404 Not Found");
    require '404.html';
}

