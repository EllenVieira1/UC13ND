<?php
include "acesso_com.php";
include "../conn/connect.php";
$lista = $conn->query("select * from tbusuarios"); // order by (tipo, destaque, etc.)
$row = $lista->fetch_assoc();
$nrows = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="fundofixo">
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger">Lista de Usuários</h2>
        <table class="table table-hover table-condensed tb-opacidade">
            <thead>
                <th class="hidden">ID</th>
                <th>LOGIN</th>
                <th>NÍVEL</th>
                <th>
                    <a href="usuarios_insere.php" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="hidden-xs">ADICIONAR &nbsp;</span>
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </th>
            </thead>
            <tbody>
                <!-- Início do corpo da tabela -->
                <?php do { ?>
                    <!-- Início da estrutura de repetição -->
                    <tr>
                        <td class="hidden"><?php echo $row['id_usuario']; ?></td>
                        <td>
                            <span class="hidden-xs"><?php echo $row['login_usuario'] ?></span>
                        </td>
                        <td>
                            <span class="hidden-xs"><?php echo $row['nivel_usuario'] ?></span>
                        </td>
                        <td>
                            <a href="usuarios_atualiza.php?id_tipo=<?php echo $row['id_usuario']?>" role="button" class="btn btn-warning btn-block btn-xs">
                                <span class="hidden-xs">ALTERAR</span>
                                <span class="glyphicon glyphicon-refresh"></span>
                            </a>
                            <button
                            data-nome="<?php echo $row['login_usuario']?>"
                            data-id="<?php echo $row['id_usuario']?>"
                            class="delete btn btn-xs btn-block btn-danger"
                            >
                                <span class="hidden-xs">EXCLUIR</span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </td>
                    </tr>
                <?php } while ($row = $lista->fetch_assoc()); ?>
                <!-- Final da estrutura de repetição -->
            </tbody> <!-- Fim do corpo da tabela -->
        </table>
    </main>
    <!-- Início do modal para excluir... -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Deseja mesmo excluir o usuário?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-success delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-danger" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div><!-- Final do modal para excluir... -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); // Busca o nome com a descrição do (data-nome)
        var id = $(this).data('id'); // Busca o id do (data-id)
        //console.log(id + ' - ' + nome); //Exibe no console
        $('span.nome').text(nome); // Insere o nome do item na confirmação
        $('a.delete-yes').attr('href','usuarios_excluir.php?id_usuario='+id); // Chama o arquivo php para excluir o produto
        $('#modalEdit').modal('show')// Chamar o modal 
    });
</script>
</html>