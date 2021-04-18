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
                <ul class="right">
                    <li><a href="index.php"><i class ="material-icons left">account_box</i>Cadastro</a></li>
                    <li><a href="consultas.php"><i class ="material-icons left">search</i>Consulta</a></li>
                </ul>
            </div>
        </nav>

        <div class ="row container">
            <p>&nbsp;</p>
            <form action="dataBase/create.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 80px">
                    <legend><img src="imagens/avatarVacina.jpg" width="140" height="140" /></legend>
                    <h4 class="light center">Registrar Aplicação de Vacina</h4>

                    <?php
                    if (isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                    ?>

                    <!-- label ndataAplicacao -->
                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <input type="date" name="dataAplicacao" id="dataAplicacao" maxlength="100" required>
                        <label for="dataAplicacao">Data da Aplicação</label>
                    </div>
                    <!-- label idBeneficiario -->
                    <div class="input-field col s6">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="idBeneficiario" id="idBeneficiario" maxlength="11" required>
                        <label for="idBeneficiario">No. Beneficiario</label>
                    </div>
                    <!-- label lote -->
                    <div class="input-field col s6">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="text" name="lote" id="lote" maxlength="10" required>
                        <label for="lote">No. Lote</label>
                    </div>
                    <!-- label codigoVacina -->
                    <div class="input-field col s6">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="text" name="codigoVacina" id="codigoVacina" maxlength="50" required>
                        <label for="codigoVacina">Código da Vacina</label>
                    </div>
                    <!-- label numeroContato -->
                    <div class="input-field col s8">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="tel" name="nomeVacina" id="nomeVacina" maxlength="20" required>
                        <label for="nomeVacina">Nome da Vacina</label>
                    </div>
                    <!-- label cnes -->
                    <div class="input-field col s4">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="text" name="cnes" id="cnes" maxlength="100" required>
                        <label for="cnes">CNES</label>
                    </div>
                    <!-- botões -->
                    <div class="center input-field col s12">
                        <input type="submit" value="inserir" class="btn light-blue darken-1">
                        <input type="reset" value="limpar" class="btn red darken-1">
                    </div>
                </fieldset>
            </form>
        </div>

        <!-- Importação JQuery e JavaScript --> 
        <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

        <!-- Inicialização do JQuery --> 
        <script type="text/javascript">
            $(document).ready(function () {

            });
        </script>
    </body>
</html>