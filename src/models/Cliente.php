<?php
namespace src\models;
use \core\Model;

class Cliente extends Model {
    public function inserir($nome, $email, $telefone, $modelo, $marca, $placa){

        $sql = 'INSERT INTO clientes (nome, email, telefone) VALUES (?,?,?)';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $telefone);
        $sql->execute();

        $idCli = $this->db->lastInsertId();

        echo 'ID do cliente é: '.$idCli;
    }
}