<?php
namespace src\models;
use \core\Model;

class Cliente extends Model {
    public function inserir($nome, $email, $telefone, $modelo, $marca, $placa, $tp_veiculo){
        $error = ['msg_error'=>'', 'cod_error'=>'', 'retorno'=>false];

        if(empty($nome) || empty($email) || empty($telefone) || empty($modelo) || empty($placa)){
            $error['msg_error'] = 'Campos Nome, E-mail, Telefone, Modelo ou Placa não preenchidos';
            $error['cod_error'] = '001';

            return $error;
        }

        $sql = 'INSERT INTO clientes (nome, email, telefone) VALUES (?,?,?)';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $telefone);
        $sql->execute();

        $idCli = $this->db->lastInsertId();

        $sql = 'INSERT INTO veiculos (modelo, marca, tp_veiculo) VALUES (?,?,?)';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $modelo);
        $sql->bindValue(2, $marca);
        $sql->bindValue(3, $tp_veiculo);
        $sql->bindValue(4, $placa);
        $sql->execute();

        $idVei = $this->db->lastInsertId();

        $sql = 'INSERT INTO cli_vei (veiculo_id, cliente_id) VALUES (?,?)';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $idVei);
        $sql->bindValue(2, $idCli);
        $sql->execute();
        


    }
}