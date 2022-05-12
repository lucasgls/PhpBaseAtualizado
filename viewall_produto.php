<?php
include 'connect.php';
?>
<a href="produto.php"> adicionar Produto </a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Produto
        </th>
        <th>
            Preço
        </th>
        <th>
            idCategoria
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from produto";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idProduto']?>
        </td>
        <td>
            <?php echo $f['nomeProduto']?>
        </td>
        <td>
            <?php echo $f['precoProduto']?>
        </td>
        <td>
            <?php echo $f['fk_idCategoria']?>
        </td>
        <td>
            <a href="delete_produto.php"> remover</a>
        </td>
    </tr>
    <?php
}
?>