<?php
include 'connect.php';


$nomePessoa=$_POST['nomePessoa'];
$emailPessoa=$_POST['emailPessoa'];
$idadePessoa=$_POST['idadePessoa'];

$sql="insert into pessoa (nomePessoa, emailPessoa, idadePessoa) values ('$nomePessoa', '$emailPessoa', $idadePessoa );";
mysqli_query($con, $sql);

header('location:viewall.php'); //depois que add o produto redireciona para o viewall novamente


//alt + shift + seta ´pra baixo
?>
