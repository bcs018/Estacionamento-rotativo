<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Login;

class UsuarioController extends Controller {
    public function cadastrarUsuario(){
        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        //$foto = $_FILES;

        print_r($_POST);
    }
}