<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Login;

class LoginController extends Controller {

    public function login(){
        $usuario = addslashes($_POST['usuario']);
        $senha   = addslashes($_POST['senha']);

        $l = new Login;
        if($l->verificaLogin($usuario, $senha)){
            header("Location: /painel");
            exit;
        }

        header("Location: /"._BASE_END_);
        exit;
    }

}