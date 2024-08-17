<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hamburgueria/modelo/vo/Endereco.php';

class EnderecoDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new EnderecoDAO();

        return self::$instance;
    }

    public function insert(Endereco $endereco) {
        try {
            $sql = "INSERT INTO endereco (numeroCasa, cep, complemento, referencia, rua, bairro) "
                    . "VALUES (:numeroCasa, :cep, :complemento, :referencia, :rua, :bairro)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":numeroCasa", $endereco->getNumeroCasa());
            $p_sql->bindValue(":cep", $endereco->getCep());
            $p_sql->bindValue(":complemento", $endereco->getComplemento());
            $p_sql->bindValue(":referencia", $endereco->getReferencia());
            $p_sql->bindValue(":rua", $endereco->getRua());
            $p_sql->bindValue(":bairro", $endereco->getBairro());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }

    public function update(Endereco $endereco) {
        try {
            $sql = "UPDATE endereco SET numeroCasa = :numeroCasa, cep = :cep, complemento = :complemento, "
                    . "referencia = :referencia, rua = :rua, bairro = :bairro WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":numeroCasa", $endereco->getNumeroCasa());
            $p_sql->bindValue(":cep", $endereco->getCep());
            $p_sql->bindValue(":complemento", $endereco->getComplemento());
            $p_sql->bindValue(":referencia", $endereco->getReferencia());
            $p_sql->bindValue(":rua", $endereco->getRua());
            $p_sql->bindValue(":bairro", $endereco->getBairro());
            $p_sql->bindValue(":id", $endereco->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM endereco WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar: " . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM endereco WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Erro ao executar a função de buscar por ID: " . $e->getMessage();
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $endereco = new Endereco();
        $endereco->setId($row['id']);
        $endereco->setNumeroCasa($row['numeroCasa']);
        $endereco->setCep($row['cep']);
        $endereco->setComplemento($row['complemento']);
        $endereco->setReferencia($row['referencia']);
        $endereco->setRua($row['rua']);
        $endereco->setBairro($row['bairro']);
        return $endereco;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM endereco";
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
            $sql = "SELECT * FROM endereco " . $restanteDoSQL;
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
            print "Erro ao executar a função de listar com filtro: " . $e->getMessage();
        }
    }
}

?>
