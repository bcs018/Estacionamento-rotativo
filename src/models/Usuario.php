<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

    public function inserir($nome, $login, $senha, $img){
        $error = ['msg_error'=>'', 'cod_error'=>'', 'retorno'=>false];

        if(empty($nome) || empty($login) || empty($senha)){
            $error['msg_error'] = 'Campos Nome, Login ou Senha não preenchidos';
            $error['cod_error'] = '001';

            return $error;
        }

        // Verifica se o login já existe
        $sql = 'SELECT * FROM usuarios WHERE login = ?';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $login);
        $sql->execute();

        if($sql->rowCount() > 0){
            $error['msg_error'] = 'Já existe o usuário "'. $login .'" no cadastro, informe outro';
            $error['cod_error'] = '002';

            return $error;
        }

        // Valida imagem
        if(empty($img)){
            $nome_img = null;
        }else{
            $ext = explode('/', $img['img']['type']);
            if($ext[1] != 'jpeg' && $ext[1] != 'png' && $ext[1] != 'jpg'){
                $error['msg_error'] = "Formato da imagem diferente de 'JPEG', 'JPG' ou 'PNG'" ;
                $error['cod_error'] = '003';
    
                return $error;
            }

            $nome_img = md5($img['img']['name'].rand(0,99999).time()).'.'.$ext[1];

            move_uploaded_file($img['img']['tmp_name'], '../assets/painel/img_user/'.$nome_img);
        }

        $sql = 'INSERT INTO usuarios (nome, login, senha, url_foto)
                VALUES (?,?,?,?)';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $login);
        $sql->bindValue(3, md5($senha));
        $sql->bindValue(4, $nome_img);
        
        if($sql->execute()){
            $error['retorno'] = true;
        }else{
            $error['msg_error'] = "Erro ao inserir usuário no cadastro" ;
            $error['cod_error'] = '004';
        }

        return $error;
    }

}