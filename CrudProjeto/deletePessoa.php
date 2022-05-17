<?php
include 'connect.php';


$id = $_GET['idPessoa'];// get = pegar

$sql="delete from pessoa where idPessoa = $id;";
mysqli_query($con, $sql);
 
header('location:viewall.php');

?>


?>