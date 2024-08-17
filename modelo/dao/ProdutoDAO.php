<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/vo/Produto.php';

class ProdutoDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ProdutoDAO();

        return self::$instance;
    }

    public function insert(Produto $produto) {
        try {
            $sql = "INSERT INTO produto (nome, descricao, precoFornecedor, precoVenda, quantidadeEstoque)"
                    . "VALUES (:nome, :descricao, :precoFornecedor, :precoVenda, :quantidadeEstoque)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $produto->getNome());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":precoFornecedor", $produto->getPrecoFornecedor());
            $p_sql->bindValue(":precoVenda", $produto->getPrecoVenda());
            $p_sql->bindValue(":quantidadeEstoque", $produto->getQuantidadeEstoque());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }

    public function update(Produto $produto) {
        try {
            $sql = "UPDATE produto SET nome=:nome, descricao=:descricao, precoFornecedor=:precoFornecedor, "
                    . "precoVenda=:precoVenda, quantidadeEstoque=:quantidadeEstoque WHERE id=:id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $produto->getNome());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":precoFornecedor", $produto->getPrecoFornecedor());
            $p_sql->bindValue(":precoVenda", $produto->getPrecoVenda());
            $p_sql->bindValue(":quantidadeEstoque", $produto->getQuantidadeEstoque());
            $p_sql->bindValue(":id", $produto->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM produto WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar: " . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM produto WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Produto();
        $obj->setId($row['id']);
        $obj->setNome($row['nome']);
        $obj->setDescricao($row['descricao']);
        $obj->setPrecoFornecedor($row['precoFornecedor']);
        $obj->setPrecoVenda($row['precoVenda']);
        $obj->setQuantidadeEstoque($row['quantidadeEstoque']);
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM produto";
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
            print "Ocorreu um erro ao tentar listar todos os produtos: " . $e->getMessage();
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM produto " . $restanteDoSQL;
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
