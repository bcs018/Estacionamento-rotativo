<?php
namespace src\models;
use \core\Model;

class Login extends Model {

    public function verificaLogin($usuario, $senha){
        $sql = "SELECT * FROM usuarios WHERE login = ? AND senha = ?";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $usuario);
        $sql->bindValue(2, md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $_SESSION['logado']            = true;
            $_SESSION['dados_usu']['nome'] = $dados['nome'];

            return true;
        }
        
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">
                                    Login e/ou senha inválidos!
                                </div>';

        return false;
    }    

    public function sair(){
        unset($_SESSION['logado']);
        unset($_SESSION['dados_usu']);
    }

    public function verificarLogado(){
        if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
            $_SESSION['message'] = '<div class="alert alert-danger" role="alert">
                                        Você não pode acessar uma área restrita, faça login para continuar!
                                    </div>';

            return false;
        }

        return true;
    }

}