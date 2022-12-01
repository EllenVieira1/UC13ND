<?php 
include "conn/connect.php";

$listaProGeral = $conn->query("select * from vw_tbprodutos where id_produto = 'id_produto' ");
$rowProGeral = $listaProGeral->fetch_assoc();
$nRows = $listaProGeral->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Produtos Geral</title>
</head>
<body class="fundofixo">
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
        </div>
        </div>
        </div>
    <?php } while($rowProGeral = $listaProGeral->fetch_assoc());?> <!-- Final da estrutura de repetição -->
</div>
    
</body>
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>
