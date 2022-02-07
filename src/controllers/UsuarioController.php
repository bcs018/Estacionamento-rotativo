<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends Controller {
    public function cadastrarUsuario(){
        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);

        $u = new Usuario;
        echo json_encode($u->inserir($nome, $login, $senha, $_FILES));

        exit;
    }
}