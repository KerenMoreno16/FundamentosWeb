<?php
    include 'connect.php';


    $id = $_GET['idPessoa'];
    $nomeProduto=$_GET['nomeProduto'];
    $precoProduto=$_GET['precoProduto'];
    $idProduto=$_GET['idProduto'];

    $sql="select * from pessoa where idPessoa={$id}";
    $query= mysqli_query($con, $sql);
    $pessoa=mysqli_fetch_assoc($query);
?>


<h1> Produtos </h1>
<form method="POST" action="editPessoaPost.php" enctype="multipart/form-data">
  <table>
    <tr>
      <td>
        Id:
        <input readonly="readonly" type="text" name="id" value="<?php echo $pessoa['idPessoa']?>">
      </td>
    </tr>
    <tr>
      <td>
        Nome Produto:
        <input type="text" name="nomePessoa" value="<?php echo $pessoa['nomePessoa']?>">
      </td>
    </tr>

    <tr>
      <td>
        E-mail:
        <input type="text" name="emailPessoa" value="<?php echo $pessoa['emailPessoa']?>">
      </td>
    </tr>

    <tr>
      <td>
        Idade:
        <input type="number" name="idadePessoa" value="<?php echo $pessoa['idadePessoa']?>">
      </td>
    </tr>

    <tr>
      <td>
        <input type="submit" value="submit" name="sub">
      </td>
    </tr>



  </table>
</form>


<?php 