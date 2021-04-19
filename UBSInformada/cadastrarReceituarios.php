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

        <div class="navbar-fixed">
            <nav class="light-blue darken-1">
                <div class ="nav-wrapper container">
                    <div class="left"><img src="imagens/logo.PNG" width=90 height=60></div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php"><i class ="material-icons left">account_box</i>Cadastrar</a></li>
                        <li><a href="consultaBeneficiarios.php"><i class ="material-icons left">search</i>Consultar</a></li>
                    </ul>

                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="sidenav" id="mobile-nav">
                        <li><a href="index.php"><i class ="material-icons left">account_box</i>Cadastrar</a></li>
                        <li><a href="consultaBeneficiarios.php"><i class ="material-icons left">search</i>Consultar</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class ="row container">
            <p>&nbsp;</p>
            <form action="dataBase/createReceituarios.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 80px">
                    <legend><img src="imagens/avatarDocumento.png" width="140" height="140" /></legend>
                    <h4 class="light center">Registrar Atestados e Declarações</h4>

                    <?php
                    if (isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                    ?>
                    <!-- label dataEmissao -->
                    <div class="input-field col s4">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="date" name="dataHoje" id="dataHoje" maxlength="10" required>
                        <label for="dataHoje">Data Emissão</label>
                    </div>
                    <!-- label idBeneficiario -->
                    <div class="input-field col s3">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="idBeneficiario" id="idBeneficiario" maxlength="11" required>
                        <label for="idBeneficiario">No. Beneficiario</label>
                    </div>
                    <!-- label unidadeSaude -->
                    <div class="input-field col s5">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="text" name="unidadeSaude" id="unidadeSaude" maxlength="100" required>
                        <label for="unidadeSaude">Unidade de Saúde</label>
                    </div>
                    <!-- label nome médico -->
                    <div class="input-field col s8">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input type="text" name="nomeMedico" id="nomeMedico" maxlength="100" required>
                        <label for="nomeMedico">Nome Médico</label>
                    </div>
                    <!-- label crm -->
                    <div class="input-field col s4">
                        <i class="material-icons prefix">info_outline</i>
                        <input type="text" name="crm" id="crm" maxlength="10" required>
                        <label for="crm">CRM</label>
                    </div>
                    <!-- label areaPrescricao -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">info_outline</i>
                        <textarea name="areaPrescricao" id="areaPrescricao" class="materialize-textarea" data-length="600"></textarea>
                        <label for="areaPrescricao">Prescrição Médica</label>
                    </div>
                    <!-- botões -->
                    <div class="center input-field col s12">
                        <input type="submit" value="gravar" class="btn light-blue darken-1">
                        <a href="consultaBeneficiarios.php" class="btn green">voltar</a>
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
                $('.sidenav').sidenav();
                $('input#input_text, textarea#areaPrescricao').characterCounter();
            });
        </script>
    </body>
</html>