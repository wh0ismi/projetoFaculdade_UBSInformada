<?php session_start() ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Importação Icons Materialize e CSS Materialize propriamente dito -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize/css/materialize.css">
        <title></title>
    </head>
    <body>

        <nav class="light-blue darken-1">
            <div class ="nav-wrapper container">
                <div class="left"><img src="imagens/logo.PNG" width=90 height=60></div>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class ="material-icons left">account_box</i>Cadastro</a></li>
                    <li><a href="consultas.php"><i class ="material-icons left">search</i>Consulta</a></li>
                </ul>

                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="sidenav" id="mobile-nav">
                    <li><a href="index.php"><i class ="material-icons left">account_box</i>Cadastro</a></li>
                    <li><a href="consultas.php"><i class ="material-icons left">search</i>Consulta</a></li>
                </ul>
            </div>
        </nav>

        <div class ="row container">
            <div class="col s12">
                <p>&nbsp;</p>
                <fieldset class="formulario" style="padding: 80px">
                    <legend><img src="imagens/avatarLupa.png" width="140" height="140" /></legend>
                    <h4 class="light center">Consulta de Beneficiários</h4>
                    
                    <table class="responsive-table light center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome Completo</th>
                                <th>CPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once 'dataBase/read.php';
                            ?>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>

        <!-- Importação JQuery e JavaScript --> 
        <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

        <!-- Inicialização do JQuery --> 
        <script type="text/javascript">
            $(document).ready(function () {
                $('.sidenav').sidenav();
            });
        </script>
    </body>
</html>