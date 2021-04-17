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
                    <li><a href=""><i class ="material-icons left">account_box</i>Cadastro</a></li>
                    <li><a href=""><i class ="material-icons left">search</i>Consulta</a></li>
                </ul>
            </div>
        </nav>
        
        <div class ="row container">
            <p>&nbsp;</p>
            <form action="dataBase/create.php" method="post" class="col s12">
                <fieldset class="formulario">
                    <legend><img src="imagens/avatarCadastro.png" width="120" height="120" /></legend>
                    <h5 class="light center">Cadastro de Beneficiário</h5>
                    
                    <?php 
                        if(isset($_SESSION['msg'])):
                            echo $_SESSION['msg'];
                            session_unset();
                        endif;
                    ?>
                    
                    <!-- label nome completo -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" maxlength="100" required>
                        <label for="nomeCompleto">Nome Completo</label>
                    </div>
                    <!-- label cpf -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">subtitles</i>
                        <input type="text" name="cpf" id="cpf" maxlength="11" required>
                        <label for="cpf">CPF</label>
                    </div>
                    <!-- label email -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="email" maxlength="50" required>
                        <label for="email">E-mail</label>
                    </div>
                    <!-- label numeroContato -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">contact_phone</i>
                        <input type="tel" name="numeroContato" id="numeroContato" maxlength="20" required>
                        <label for="numeroContato">Telefone</label>
                    </div>
                    <!-- label enderecoComplero -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin_circle</i>
                        <input type="text" name="enderecoCompleto" id="enderecoCompleto" maxlength="100" required>
                        <label for="enderecoComplero">Endereço</label>
                    </div>
                    <!-- label cep -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">near_me</i>
                        <input type="text" name="cep" id="cep" maxlength="10" required>
                        <label for="cep">CEP</label>
                    </div>
                    <!-- botões -->
                    <div class="input-field col s12">
                        <input type="submit" value="cadastrar" class="btn light-blue darken-1">
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
