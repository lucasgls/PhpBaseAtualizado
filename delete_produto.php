<?php
include 'connect.php';

$id = $_GET['idProduto']

$sq="delete from produto where idProduto='$_SESSION[idProduto]'";
mysqli_query($con,$sq);
header('location:add_district.php');
?>