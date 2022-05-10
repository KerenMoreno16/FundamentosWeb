<?php
include 'connect.php';


$id = $_GET['idProduto'];// get = pegar

$sql="delete from produto where idProduto=$id;";
mysqli_query($con, $sql);


header('location:viewall.php');

?>