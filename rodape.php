<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body class="fundofixo">
    <div class="row panel-footer fundo-rodape">
        <!-- Área de localização -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <img src="images/logo.png" alt="">
                <br>
                <i>O melhor churrasco do Brasil</i>
                <address>
                    <span class="glyphicon glyphicon-map-marker"></span>
                    <i>Avenida Itaquera, 8266 - Itaquera - São Paulo - SP - CEP 08295000</i>
                    <br>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    &nbsp; (11) 2185-9200
                    <br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    &nbsp;
                    <a href="mail:contato@chuleta.com.br?subject=Contato Site&cc=ellen.vsilva3@senacsp.edu.br">
                        contato@chuleta.com.br
                    </a>
                </address>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7947097421193!2d-46.45865274899297!3d-23.53988498461847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf222d207b%3A0x1939a901dce47f36!2sAv.%20Itaquera%2C%208266%20-%20Vila%20Carmosina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008295-000!5e0!3m2!1spt-BR!2sbr!4v1669646714133!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div> <!-- Fecha Área de localização -->
        <!-- Abre área de navegação -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#destaques" class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#produtos" class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#contato" class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contato</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/index.php" class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administração</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Área de contato -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <h4>Contato</h4>
                <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user"></span>
                                </span><input
                                type="text"
                                name="nome_contato"
                                placeholder="Digite seu nome"
                                class="form-control"
                                aria-describedby="basic-addon1"
                                required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon2">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                               </span>
                               <input
                                type="text"
                                name="email_contato"
                                placeholder="Digite seu email"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon3">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </span>
                                <textarea
                                name="comentarios_contato"
                                id="comentarios_contato"
                                cols="30"
                                rows="5"
                                placeholder="Escreva aqui seus comentários, dúvidas e/ou sugestões"
                                class="form-control"
                                aria-describedby="basic-addon3">
                                </textarea>
                        </span>
                    </p>
                    <p>
                        <button class="btn btn-danger btn-block" aria-label="Enviar" role="button">
                            Enviar
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </button>
                    </p>
                </form>
            </div> 
        </div><!-- Fim da área de contato -->
        <!-- Abre área do desenvolvedor -->
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                <h6 class="text-danger text-center">
                    Desenvolvido por Ellen Vieira&trade; 2022
                    <br>
                    <a href="https://github.com/EllenVieira1/" target="_blank">
                        EllenVieira1.com.br
                    </a>
                </h6>
            </div>
        </div>
    </div>
</body>
</html>