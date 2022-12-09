<?php
// Incluindo o Sistema de autenticação
include("acesso_com.php");

// Incluir o arquivo e fazer a conexão
include("../conn/connect.php");


if($_POST){

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem
    $id_tipo    =   $_POST['id_tipo'];
    $sigla_tipo   =   $_POST['sigla_tipo'];
    $rotulo_tipo     =   $_POST['rotulo_tipo'];

    // Campo do form para filtrar o registro (WHERE)
    $id      = $_POST['id_tipo'] ;

    // Consulta SQL para atualização de dados
    $updateSQL  =   "UPDATE tbtipos
                        SET id_tipo ='$id_tipo',
                            sigla_tipo ='$sigla_tipo',
                            rotulo_tipo ='$rotulo_tipo'
                            WHERE id_tipo = $id ";
    $resultado  =   $conn->query($updateSQL);
    if ( $resultado ) {
        header("Location: tipos_lista.php");
    }
    
};

// Consulta para trazer e filtrar os dados
if ($_GET){$id_form  =   $_GET['id_tipo'];}
else{$id_form = 0;}
$lista          =   $conn->query("SELECT * FROM tbtipos WHERE id_tipo = $id_form");
$row            =   $lista->fetch_assoc();
$totalRows      =   ($lista)->num_rows;


// Selecionar os dados da chave estrangeira
$tabela_fk      =   "tbtipos";
$ordenar_por    =   "rotulo_tipo ASC";
$consulta_fk    =   "SELECT *
                    FROM ".$tabela_fk."
                    ORDER BY ".$ordenar_por." ";
// Fazer a lista completa dos dados
$lista_fk       =   $conn->query($consulta_fk);
// Separar os dados em linhas(row)
$row_fk         =   $lista_fk->fetch_assoc();
// Contar o total de linhas
$totalRows_fk   =   ($lista_fk)->num_rows;

?>
<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Tipos - Atualiza</title>
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
                <a href="tipos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Atualizar Tipo
            </h2>
            <!-- Abre thumbnail -->
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="tipos_atualiza.php" id="form_tipos_atualiza" name="form_tipos_atualiza" method="post" enctype="multipart/form-data">
                        <!-- Inserir o campo id_tipo OCULTO para uso em filtros -->
                        <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo $row['id_tipo']; ?>">                    

                        <label for="sigla_tipo">Sigla:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a sigla do tipo." maxlength="100" required value="<?php echo $row['sigla_tipo']; ?>">
                        </div><!-- fecha input-group -->
                        <br>

                        
                        <label for="rotulo_tipo">Rótulo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o rótulo do tipo." maxlength="100" required value="<?php echo $row['rotulo_tipo']; ?>">
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
<?php 
    mysqli_free_result($lista_fk);
    mysqli_free_result($lista);
?>