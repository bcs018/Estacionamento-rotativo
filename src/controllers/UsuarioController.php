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

    public function alterarUsuario(){

    }

    public function getUsuario($tpUsu=0){
        /**
         * Se tpusu = 0 é usuario admin
         * Se tpusu = 1 é usuario do sistema
         */

        $u = new Usuario;
        echo json_encode($u->getUsuario());

        exit;

    }
}