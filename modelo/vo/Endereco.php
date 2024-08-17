<?php

class Endereco {

    private $id;
    private $numeroCasa;
    private $cep;
    private $complemento;
    private $referencia;
    private $rua;
    private $bairro;

    public function getId() {
        return $this->id;
    }

    public function getNumeroCasa() {
        return $this->numeroCasa;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumeroCasa($numeroCasa) {
        $this->numeroCasa = $numeroCasa;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }


}