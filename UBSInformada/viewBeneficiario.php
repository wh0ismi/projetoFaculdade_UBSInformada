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
            <p>&nbsp;</p>
            <fieldset class="formulario" style="padding: 80px">
                <table class="responsive-table light center">

                    <thead>
                        <tr>
                            <td class="col s2">Id</td>
                            <td class="col s8">Nome Completo</td>
                            <td class="col s2">CPF</td>
                        </tr>
                    </thead>

                    <tbody>
                        <td class="col s2" for="idBeneficiario"></td>
                        <td class="col s8" for="nomeCompleto"></td>
                        <td class="col s2" for="cpf"></td>
                    </tbody>
                </table>
            </fieldset>
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