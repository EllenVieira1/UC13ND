<?php
// Incluindo o Sistema de autenticação
include("acesso_com.php");

// Incluir o arquivo e fazer a conexão
include("../conn/connect.php");

if ($_POST) {

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem
    $id_usuario   =   $_POST['id_usuario'];
    $login_usuario  =   $_POST['login_usuario'];
    $nivel_usuario     =   $_POST['nivel_usuario'];

    // Consulta SQL para inserção de dados
    $insertSQL  =   "INSERT INTO tbusuarios
                        (id_usuario, login_usuario, nivel_usuario)
                    VALUES
                        ('$id_usuario','$login_usuario','$nivel_usuario')
                    ";
    $resultado  =   $conn->query($insertSQL);

    // Após a ação a página será redirecionada
    if (mysqli_insert_id($conn)) {
        header("Location: usuarios_lista.php");
    } else {
        header("Location: usuarios_lista.php");
    };
};

?>
<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Usuários - Insere</title>
    <meta charset="UTF-8">
    <!-- Link arquivos Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>

<body class="fundofixo">
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <div class="row">
            <!-- Abre row -->
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                <!-- Dimensionamento -->
                <h2 class="breadcrumb text-danger">
                    <a href="usuarios_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Usuários
                </h2>
                <!-- Abre thumbnail -->
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuarios_insere.php" id="form_usuarios_insere" name="form_usuarios_insere" method="post" enctype="multipart/form-data">
                            <!-- text login_usuario -->
                            <label for="login_usuario">Login:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" class="form-control" placeholder="Digite o login do usuário." maxlength="100" required>
                            </div><!-- fecha input-group -->
                            <br>
                            <!-- Fecha text login_usuario -->

                            <!-- text nivel_usuario -->
                            <label for="nivel_usuario">Nível:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nivel_usuario" id="nivel_usuario" class="form-control" placeholder="Digite o nível do usuário." maxlength="100" required>
                            </div><!-- fecha input-group -->
                            <br>
                            <!-- Fecha text nivel_usuario -->

                            <!-- btn enviar -->
                            <input type="submit" value="Cadastrar" name="enviar" id="enviar" class="btn btn-danger btn-block">
                        </form>
                    </div><!-- Fecha alert -->
                </div><!-- Fecha thumbnail -->
            </div><!-- Fecha Dimensionamento -->
        </div><!-- Fecha row -->
    </main>

    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>