<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Login;
use \src\models\Usuario;

class PainelController extends Controller {

    public function index(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/home');
    }

    public function addUser(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/add_usuario');
    }

    public function configuracoes(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/configuracoes');
    }

    public function configuracoesUser(){
        $l = new Login;
        $u = new UsuarioController;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/configuracoes_user');

    }

}