<?php

class Carrinho {

   private $idPedido;
    private $valorTotal = 0.0;
    private $produtos = [];

    function getValorTotal() {
        $this->valorTotal = 0.0;
        foreach ($this->produtos as $produto) {
            $this->valorTotal += $produto->getPrecoVenda();
        }
        return $this->valorTotal;
    }

    public function getIdPedido() {
        return $this->idPedido;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function adicionarProd($produto) {
        $this->produtos[] = $produto;
    }


}
