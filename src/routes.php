<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/login', 'LoginController@login');
$router->get('/sair', 'LoginController@sair');

$router->get('/painel', 'PainelController@index');


$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');