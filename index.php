<?php 

use Alto\AltoRouter;

require 'vendor/autoload.php';

require 'elements/header.php';

$router = new AltoRouter();

var_dump($_SERVER['REQUEST_URI']);

$router->setBasePath('/SitePerso'); // SitePerso is the new root

$router->map('GET', '/', 'templates/home.php', 'home'); // map for home need to match an another route for home, /index.php
$match = $router->match();
if ($match) {
    require $match['target'];
} else {
    header("HTTP/1.0 404 Not Found");
    require '404.html';
}


require 'elements/footer.php';