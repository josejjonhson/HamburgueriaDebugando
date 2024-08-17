<?php
require_once $_SERVER['DOCUMENT_ROOT'] 
        ."/hamburgueria/modelo/vo/Endereco.php";
require_once $_SERVER['DOCUMENT_ROOT'] 
        ."/hamburgueria/modelo/dao/EnderecoDAO.php";

if (isset($_GET['idDel'])) {
    EnderecoDAO::getInstance()->delete($_GET['idDel']);
    echo " <script> 
        alert('Endereço removido com sucesso!');
        window.location='../EnderecoList.php';
    </script>";
} elseif (isset($_POST)) {
    $enderecoQueEuQueroSalvar = new Endereco();
    $enderecoQueEuQueroSalvar->setNumeroCasa($_POST['numeroCasa']);
    $enderecoQueEuQueroSalvar->setCep($_POST['cep']);
    $enderecoQueEuQueroSalvar->setComplemento($_POST['complemento']);
    $enderecoQueEuQueroSalvar->setReferencia($_POST['referencia']);
    $enderecoQueEuQueroSalvar->setRua($_POST['rua']);
    $enderecoQueEuQueroSalvar->setBairro($_POST['bairro']);
    
    print_r($enderecoQueEuQueroSalvar);

    if ($_POST['id'] == 0) {
        EnderecoDAO::getInstance()->insert($enderecoQueEuQueroSalvar);
    } else {
        $enderecoQueEuQueroSalvar->setId($_POST['id']);
        EnderecoDAO::getInstance()->update($enderecoQueEuQueroSalvar);
    }
    echo " <script> 
        alert('Endereço salvo com sucesso!');
        window.location='../EnderecoAddEdit.php';
    </script>";
}
?>
