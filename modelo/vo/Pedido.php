<?php

class Pedido {

    private $id;
    private $data;
    private $idUsuario;
    private $enderecoEntrega;

    public function getEnderecoEntrega() {
        return $this->enderecoEntrega;
    }

    public function setEnderecoEntrega($enderecoEntrega) {
        $this->enderecoEntrega = $enderecoEntrega;
    }

    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function toString() {
        return (string) $this->id;
    }

}
