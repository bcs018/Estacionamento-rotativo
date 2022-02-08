<?php
namespace src;

$enviroment = 'local';
//$enviroment = 'production';

if($enviroment == 'local'){
    define('_BASE_ASS_','http://localhost/Estacionamento-rotativo/assets/');
    define('_BASE_END_','http://localhost/Estacionamento-rotativo/');
}else{
    define('_BASE_ASS_','');
    define('_BASE_END_','');
}

class Config {
    const BASE_DIR = '/mvc/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'estacionamento';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}