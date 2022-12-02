<?php 
include "conn/connect.php";

$listaProGeral = $conn->query("select * from vw_tbprodutos where id_produto");
$rowProGeral = $listaProGeral->fetch_assoc();
$nRows = $listaProGeral->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Geral</title>
</head>
<body>
<h2 class="breadcrumb alert-danger"><strong>Produtos Geral</strong></h2>
<div class="row">
    <?php do {?> <!-- Início da estrutura de repetição -->
        <div class="col-sm-6 col-md-4">
            <!-- Abre thumbnail/card -->
        <div class="thumbnail">
            <a href="produto_detalhe.php?id_produto=<?php echo $rowProGeral['id_produto']; ?>">
                <img src="images/<?php echo $rowProGeral['imagem_produto']; ?>"
                class="img-responsive img-rounded" style="height: 20em;">
            </a>
        <div class="caption text-right">
            <h3 class="text-danger">
                <strong><?php echo $rowProGeral['descri_produto']; ?></strong>
            </h3>
            <p class="text-warning">
                <strong><?php echo $rowProGeral['rotulo_tipo']; ?></strong>
            </p>
            <p class="text-left">
                <?php echo mb_strimwidth($rowProGeral['resumo_produto'],0,40,'...') ; ?>
            </p>
            <p>
                <button class="btn btn-default disabled" role="button" style="cursor: default;">
                    <?php echo "R$ " .number_format($rowProGeral['valor_produto'], 2,',','.'); ?>
                </button>
                <a href="produto_detalhe.php?id_produto=<?php echo $rowProGeral['id_produto']; ?>">
                    <span class="hidden-xs">Saiba Mais...</span>
                    <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </a>
            </p>
        </div>
    </div>
    <!-- fecha thumbnail/card -->
</div>
    <?php } while($rowProGeral = $listaProGeral->fetch_assoc());?> <!-- Final da estrutura de repetição -->
</div>
</body>
</html>
