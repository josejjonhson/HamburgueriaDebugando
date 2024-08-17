<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/vo/Pedido.php';

class PedidoDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new PedidoDAO();

        return self::$instance;
    }

    public function insert(Pedido $pedido) {
        try {
            $sql = "INSERT INTO pedido (data, idUsuario, enderecoEntrega)"
                    . "VALUES "
                    . "(:data, :idUsuario, :enderecoEntrega)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":data", $pedido->getData());
            $p_sql->bindValue(":idUsuario", $pedido->getIdUsuario());
            $p_sql->bindValue(":enderecoEntrega", $pedido->getEnderecoEntrega());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }

    public function update(Pedido $pedido) {
        try {
            $sql = "UPDATE pedido SET data=:data, idUsuario=:idUsuario, enderecoEntrega=:enderecoEntrega "
                    . "WHERE id=:id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":data", $pedido->getData());
            $p_sql->bindValue(":idUsuario", $pedido->getIdUsuario());
            $p_sql->bindValue(":enderecoEntrega", $pedido->getEnderecoEntrega());
            $p_sql->bindValue(":id", $pedido->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM pedido WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar: " . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM pedido WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Erro ao executar a função de buscar por ID: " . $e->getMessage();
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Pedido();
        $obj->setId($row['id']);
        $obj->setData($row['data']);
        $obj->setIdUsuario($row['idUsuario']);
        $obj->setEnderecoEntrega($row['enderecoEntrega']);
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM pedido";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Erro ao executar a função de listar todos: " . $e->getMessage();
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM pedido " . $restanteDoSQL;
            $p_sql = BDPDO::getInstance()->prepare($sql);
            for ($i = 0; $i < sizeof($arrayDeParametros); $i++) {
                $p_sql->bindValue($arrayDeParametros[$i], $arrayDeValores[$i]);
            }
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Erro ao executar a função de listar com condição: " . $e->getMessage();
        }
    }

}

?>
