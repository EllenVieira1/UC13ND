<?php 
include '../conn/connect.php';
$excluido = $conn->query("delete from where id_tipo=".$_GET['id_tipo']); 
header("location: tipos_lista.php")
?>