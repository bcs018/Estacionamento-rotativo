<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cliente;
use \src\models\Login;

class ClienteController extends Controller {
    public function addCliente(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/add_cliente');
    }

    public function addClienteAction(){
        $nome     = addslashes($_POST['nome']);
        $email    = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $modelo   = addslashes($_POST['modelo']);
        $marca    = addslashes($_POST['marca']);
        $placa    = addslashes($_POST['placa']);

        $c = new CLiente;

        echo json_encode($c->inserir($nome, $email, $telefone, $modelo, $marca, $placa));

        exit;
    }
}