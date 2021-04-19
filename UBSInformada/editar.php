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
                        <li><a href="index.php"><i class ="material-icons left">account_box</i>index</a></li>
                        <li><a href="consultas.php"><i class ="material-icons left">search</i>consul bene</a></li>
                        <li><a href="cadastrarVacinas.php"><i class ="material-icons left">search</i>cad vacinas</a></li>   
                        <li><a href="editar.php"><i class ="material-icons left">search</i>edi</a></li>
                        <li><a href="viewBeneficiario.php"><i class ="material-icons left">sea</i></a></li>
                    </ul>

                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="sidenav" id="mobile-nav">
                        <li><a href="index.php"><i class ="material-icons left">account_box</i>index</a></li>
                        <li><a href="consultas.php"><i class ="material-icons left">search</i>consul bene</a></li>
                        <li><a href="cadastrarVacinas.php"><i class ="material-icons left">search</i>cad vacinas</a></li>   
                        <li><a href="editar.php"><i class ="material-icons left">search</i>edi</a></li>
                        <li><a href="viewBeneficiario.php"><i class ="material-icons left">sea</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <?php
        include_once 'dataBase/conexao.php';

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['id'] = $id;
        $querySelect = $link->query("SELECT * FROM tb_beneficiario where id='$id'");

        while ($registros = $querySelect->fetch_assoc()):
            $nomeCompleto = $registros['nomeCompleto'];
            $cpf = $registros['cpf'];
            $dataNascimento = $registros['dataNascimento'];
            $email = $registros['email'];
            $numeroContato = $registros['numeroContato'];
            $enderecoCompleto = $registros['enderecoCompleto'];
            $cep = $registros['cep'];
        endwhile;
        ?>    

        <?php
        if (isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            session_unset();
        endif;
        ?>

        <div class ="row container">
            <div class="col s12">
                <p>&nbsp;</p>
                <form action="./dataBase/update.php" method="post" class="col s12">
                    <fieldset class="formulario" style="padding: 80px">
                        <legend><img src="imagens/avatarAtualizar.png" width="140" height="140" /></legend>
                        <h4 class="light center">Atualização de Dados do Beneficiário</h4>

                        <!-- label nome completo -->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="nomeCompleto" id="nomeCompleto" value="<?php echo $nomeCompleto ?>" maxlength="100" required>
                            <label for="nomeCompleto">Nome Completo</label>
                        </div>
                        <!-- label cpf -->
                        <div class="input-field col s6">
                            <i class="material-icons prefix">subtitles</i>
                            <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" maxlength="11" required>
                            <label for="cpf">CPF</label>
                        </div>
                        <!-- label dataNascimento -->
                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input type="date" name="dataNascimento" id="dataNascimento" value="<?php echo $dataNascimento ?>" required>
                            <label for="dataNascimento">Data de Nascimento</label>
                        </div>
                        <!-- label email -->
                        <div class="input-field col s8">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
                            <label for="email">E-mail</label>
                        </div>
                        <!-- label numeroContato -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix">contact_phone</i>
                            <input type="tel" name="numeroContato" id="numeroContato" value="<?php echo $numeroContato ?>" maxlength="20" required>
                            <label for="numeroContato">Telefone</label>
                        </div>
                        <!-- label cep -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix">near_me</i>
                            <input type="text" name="cep" id="cep" value="<?php echo $cep ?>" maxlength="10" required>
                            <label for="cep">CEP</label>
                        </div>
                        <!-- label enderecoComplero -->
                        <div class="input-field col s8">
                            <i class="material-icons prefix">person_pin_circle</i>
                            <input type="text" name="enderecoCompleto" id="enderecoCompleto" value="<?php echo $enderecoCompleto ?>" maxlength="100" required>
                            <label for="enderecoComplero">Endereço</label>
                        </div>
                        <!-- botões -->
                        <div class="center input-field col s12">
                            <input type="submit" value="atualizar" class="btn light-blue darken-1">
                            <a href="consultas.php" class="btn green">voltar</a>
                        </div>
                    </fieldset>
                </form>
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