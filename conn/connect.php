<?php 
// Definindo 
$host = "localhost";
$database = "ti92phpdb01";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

$conn = new mysqli($host, $user, $pass, $database, $port);

mysqli_set_charset($conn, $charset);

if($conn->connect_error){
    echo "Atenção ERRO: ".$conn->connect_error;
}

// http://localhost/uc13nd/conn/connect.php

?>