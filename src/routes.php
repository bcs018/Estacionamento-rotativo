<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/login', 'LoginController@login');
$router->get('/sair', 'LoginController@sair');

$router->get('/painel', 'PainelController@index');
$router->get('/painel/cadastrar-usuario', 'PainelController@addUser');
$router->post('/painel/cadastrar-action', 'UsuarioController@cadastrarUsuario');
$router->post('/painel/nova-ocorrencia', 'OcorrenciaController@novaOcorrencia');
$router->get('/painel/cadastrar-cliente', 'ClienteController@addCliente');
$router->get('/painel/configuracoes', 'PainelController@configuracoes');
$router->get('/painel/configuracoes-usuario', 'PainelController@configuracoesUser');
$router->post('/painel/cadastrar-cliente-action', 'ClienteController@addClienteAction');




$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');