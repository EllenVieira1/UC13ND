<?php
// Incluindo o Sistema de autenticação
include("acesso_com.php");

// Incluir o arquivo e fazer a conexão
include("../conn/connect.php");


if($_POST){

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem
    $id_usuario    =   $_POST['id_usuario'];
    $login_usuario    =   $_POST['login_usuario'];
    $nivel_usuario     =   $_POST['nivel_usuario'];

    // Campo do form para filtrar o registro (WHERE)
    $id      = $_POST['id_usuario'] ;

    // Consulta SQL para atualização de dados
    $updateSQL  =   "UPDATE tbusuarios
                        SET id_usuario ='$id_usuario',
                            login_usuario  ='$login_usuario',
                            nivel_usuario ='$nivel_usuario'
                            WHERE id_usuario = $id ";
    $resultado  =   $conn->query($updateSQL);
    if ( $resultado ) {
        header("Location: usuarios_lista.php");
    }
    
};

// Consulta para trazer e filtrar os dados
if ($_POST){$id_form  =   $_POST['id_usuario'];}
else{$id_form = 0;}
$lista          =   $conn->query("SELECT * FROM tbusuarios WHERE id_usuario = $id_form");
$row            =   $lista->fetch_assoc();
$totalRows      =   ($lista)->num_rows;

?>
<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Usuários - Atualiza</title>
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
    <div class="row"><!-- Abre row -->
        <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"><!-- Dimensionamento -->
            <h2 class="breadcrumb text-danger">
                <a href="usuarios_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Atualizar Usuário
            </h2>
            <!-- Abre thumbnail -->
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="usuarios_atualiza.php" id="form_usuarios_atualiza" name="form_usuarios_atualiza" method="post" enctype="multipart/form-data">
                        <!-- Inserir o campo id_usuario OCULTO para uso em filtros -->
                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row['id_usuario']; ?>">                    

                        <label for="login_usuario">Nome de Login:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="login_usuario" id="login_usuario" class="form-control" placeholder="Digite o nome de Login do usuário." maxlength="100" required value="<?php echo $row['login_usuario']; ?>">
                        </div><!-- fecha input-group -->
                        <br>

                        
                        <label for="nivel_usuario">Nível:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="nivel_usuario" id="nivel_usuario" class="form-control" placeholder="Digite o nível do usuário." maxlength="100" required value="<?php echo $row['nivel_usuario']; ?>">
                        </div><!-- fecha input-group -->
                        <br>

                        <!-- btn enviar -->
                        <input type="submit" value="Atualizar" name="enviar" id="enviar" class="btn btn-danger btn-block">
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