<?php
require_once $_SERVER['DOCUMENT_ROOT'] 
        . "/hamburgueria/modelo/vo/CategoriaProduto.php";
require_once $_SERVER['DOCUMENT_ROOT'] 
        . "/hamburgueria/modelo/dao/CategoriaProdutoDAO.php";

if (isset($_GET['idDel'])) {
    CategoriaProdutoDAO::getInstance()->delete($_GET['idDel']);
    echo " <script> 
        alert('Categoria removida com sucesso!');
        window.location='../CategoriaProdutoList.php';
    </script>";
} elseif (isset($_POST)) {
    $categoriaQueEuQueroSalvar = new CategoriaProduto(); 
    $categoriaQueEuQueroSalvar->setNome($_POST['nome']);
    $categoriaQueEuQueroSalvar->setDescricao($_POST['descricao']);

    if ($_POST['id'] == 0) {
        CategoriaProdutoDAO::getInstance()->insert($categoriaQueEuQueroSalvar);
    } else {
        $categoriaQueEuQueroSalvar->setId($_POST['id']);
        CategoriaProdutoDAO::getInstance()->update($categoriaQueEuQueroSalvar);
    }
    echo " <script> 
        alert('Categoria salva com sucesso!');
        window.location='../CategoriaProdutoAddEdit.php';
    </script>";
}
?>
