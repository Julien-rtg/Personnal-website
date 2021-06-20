<?php 
require 'vendor/autoload.php';

use App\Deploy;
use Alto\AltoRouter;
$router = new AltoRouter();
$var = new Deploy(); // refer to src/deploy.php

$router->setBasePath($var->switch()); // Root

$router->map('GET', '/', 'templates/home.php', 'home');
$router->map('GET', '/Realisations', 'templates/realisations.php', 'realisations');
$router->map('GET', '/Realisations/MLS', 'templates/realisations/MLS.php', 'realisationsMLS');

$match = $router->match();
if ($match) {
    require 'elements/header.php';
    require $match['target'];
    require 'elements/footer.php';
} else {
    header("HTTP/1.0 404 Not Found");
    require '404.html';
}