<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Login;

class OcorrenciaController extends Controller {
    public function novaOcorrencia(){
        $l = new Login;

        if(!$l->verificarLogado()){
            header("Location: "._BASE_END_);
        }

        $this->render('painel/nova_ocorrencia');
    }
}