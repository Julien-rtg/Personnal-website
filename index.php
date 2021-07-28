<?php 
require 'vendor/autoload.php';

use App\Deploy;
use Alto\AltoRouter;
$router = new AltoRouter();
$var = new Deploy(); // refer to src/deploy.php

$router->setBasePath($var->switch()); // Root

$router->map('GET', '/', 'templates/home.html', 'home');

$match = $router->match();
if ($match) {
    require 'elements/header.html';
    require $match['target'];
    require 'elements/footer.html';
} else {
    header("HTTP/1.0 404 Not Found");
    require '404.html';
}