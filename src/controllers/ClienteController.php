<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\models\Login;

class ClienteController extends Controller {
    public function addCliente(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/add_cliente');

    }
}