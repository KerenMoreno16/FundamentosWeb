<?php
    include 'connect.php';
?>


<h1> Pessoas </h1>
        <form method="POST" action="addPessoa.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome Pessoa: 
                        <input type="text" name="nomePessoa">
                    </td>
                </tr>

                <tr>

                    <td>
                        Email Pessoa: 
                        <input type="text" name="emailPessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        Idade Pessoa: 
                        <input type="number" name="idadePessoa">
                    </td>
                </tr>


                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>
            
            </table>
        </form>   


<table border='1'>
    <tr>
        <th>
            Nome
        </th>
        <th>
            E-mail
        </th>
        <th>
            Idade
        </th>

        <th>

        </th>
    </tr>

<?php
$sql="select * from pessoa";
$qu=mysqli_query($con,$sql);
while($p=mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $p['nomePessoa']?>
        </td>
        <td>
            <?php echo $p['emailPessoa']?>
        </td>
        <td>
            <?php echo $p['idadePessoa']?>
        </td>

        <td>
            <a href="deletePessoa.php?idPessoa=<?php echo $p['idPessoa']?>">Deletar</a>
        </td>
        <td>
            <a href="editPessoa.php?idPessoa=<?php echo $p['idPessoa']?>">Alterar</a>
        </td>
    </tr>
    <?php
}
?>