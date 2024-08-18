<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/vo/CategoriaProduto.php';

class CategoriaProdutoDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new CategoriaProdutoDAO();

        return self::$instance;
    }

    public function insert(CategoriaProduto $categoriaProduto) {
        try {
            $sql = "INSERT INTO categoria (nome, descricao) "
                    . "VALUES (:nome, :descricao)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $categoriaProduto->getNome());
            $p_sql->bindValue(":descricao", $categoriaProduto->getDescricao());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }

    public function update(CategoriaProduto $categoriaProduto) {
        try {
            $sql = "UPDATE categoria SET nome=:nome, descricao=:descricao "
                    . "WHERE id=:id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $categoriaProduto->getNome());
            $p_sql->bindValue(":descricao", $categoriaProduto->getDescricao());
            $p_sql->bindValue(":id", $categoriaProduto->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM categoria WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar: " . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM categoria WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new CategoriaProduto();
        $obj->setId($row['id']);
        $obj->setNome($row['nome']);
        $obj->setDescricao($row['descricao']);
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM categoria";
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
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM categoria " . $restanteDoSQL;
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
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }

}

?>
