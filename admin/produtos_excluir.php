<?php 
include '../conn/connect.php';
$excluido = $conn->query("delete from where id_produto=".$_GET['id_produto']); 
header("location: produtos_lista.php")
?>