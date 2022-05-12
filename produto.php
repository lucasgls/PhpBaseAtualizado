<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $c=$_POST['categoria'];
    $p=$_POST['Preco'];
    
    //$i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    $i="insert into produto (nomeProduto,fk_idCategoria,precoProduto) values ('$t','$c','$p')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome do Produto:
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preco do Produto:
                        <input type="text" name="Preco">
                    </td>
                </tr>
                <tr>
                    <td>
                        Categoria
                        <select name="categoria">
                            <option value="">-select-</option>
                            <?php
                            $sqlCity= mysqli_query($con, "select * from categoria");

                            while($item = mysqli_fetch_assoc($sqlCity))
                            {
                                $nomeItem = $item['nomeCategoria'];
                                $idCategoria = $item['idCategoria'];
                                echo "
                                        <option value=$idCategoria >$nomeItem</option>";
                            }
                            ?>
                           
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                    <td>
                        <a href="login.php"> Login </a>
                    </td>
                </tr>
            </table>
    </body>
</html>