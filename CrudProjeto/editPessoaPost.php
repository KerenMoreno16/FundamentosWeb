<?php
include 'connect.php';


$nomeProduto=$_POST['nomeProduto'];
$precoProduto=$_POST['precoProduto'];
$idProduto=$_POST['idProduto'];

$sql = "UPDATE pessoa
        SET nomePessoa = '$nome',
            emailPessoa = '$emailPessoa',
            idadePessoa = $idadePessoa,
            update_at = NOW(),
            update_by = '$user'
        WHERE idPessoa = $idPessoa;";
mysqli_query($con, $sql);

header('location:viewall.php'); //depois que add o produto redireciona para o viewall novamente

?>