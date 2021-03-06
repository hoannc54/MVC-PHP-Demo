<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$router = new \Core\Router();

$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('contact', ['controller' => 'HomeController', 'action' => 'contact']);
$router->add('/user', ['controller' => 'UserController', 'action' => 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
?>