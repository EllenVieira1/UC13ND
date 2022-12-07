<?php
include "acesso_com.php";
include "../conn/connect.php";
$lista = $conn->query("select * from tbusuarios"); // order by (tipo, destaque, etc.)
$row = $lista->fetch_assoc();
$nrows = $lista->num_rows;
?>