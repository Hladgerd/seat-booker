<?php

require("../private/config/autoload.php");

$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'SeatController', 'action' => 'indexAction']);
$router->add('{controller}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);

