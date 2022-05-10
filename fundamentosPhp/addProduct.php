<?php
include 'connect.php';


$nomeProduto=$_POST['nomeProduto'];
$precoProduto=$_POST['precoProduto'];

$sql="insert into produto (nomeProduto, precoProduto) values ('$nomeProduto', $precoProduto);";
mysqli_query($con, $sql);


header('location:viewall.php'); //depois que add o produto redireciona para o viewall novamente

?>