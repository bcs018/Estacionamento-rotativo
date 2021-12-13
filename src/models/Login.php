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
            return true;
        }
        
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">
                                    Login e/ou senha inválidos!
                                </div>';

        return false;
    }    

}