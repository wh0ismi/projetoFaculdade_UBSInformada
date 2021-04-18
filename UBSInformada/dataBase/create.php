<?php
session_start();
include_once 'conexao.php';

$nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$numeroContato = filter_input(INPUT_POST, 'numeroContato', FILTER_SANITIZE_NUMBER_INT);
$enderecoCompleto = filter_input(INPUT_POST, 'enderecoCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("select cpf from tb_beneficiario");
$array_cpfs = [];

while ($cpfs = $querySelect->fetch_assoc()):
    $cpfs_existentes = $cpfs['cpf'];
    array_push($array_cpfs, $cpfs_existentes);
endwhile;

if (in_array($cpf, $array_cpfs)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cadastro com esse CPF.'."</p>";
    header("Location:../");
else: 
    $queryInsert = $link->query("insert into tb_beneficiario values(default,
                                                                    '$nomeCompleto',
                                                                    '$cpf',
                                                                    '$dataNascimento',
                                                                    '$email',
                                                                    '$numeroContato',
                                                                    '$enderecoCompleto',
                                                                    '$cep')");
    $affect_rows = mysqli_affected_rows($link);
    
    if($affect_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro realizado com sucesso.'."</p>";
    header ("Location:../");
    endif;
endif;

$dataAplicacao = filter_input(INPUT_POST, 'dataAplicacao');
$idBeneficiario = filter_input(INPUT_POST, 'idBeneficiario', FILTER_SANITIZE_NUMBER_INT);
$lote = filter_input(INPUT_POST, 'lote', FILTER_SANITIZE_NUMBER_INT);
$codigoVacina = filter_input(INPUT_POST, 'codigoVacina', FILTER_SANITIZE_NUMBER_INT);
$nomeVacina = filter_input(INPUT_POST, 'nomeVacina', FILTER_SANITIZE_SPECIAL_CHARS);
$cnes = filter_input(INPUT_POST, 'cnes', FILTER_SANITIZE_NUMBER_INT);

$queryInsert = $link->query("insert into tb_vacina values(default,
                                                            '$dataAplicacao',
                                                            '$idBeneficiario',
                                                            '$lote',
                                                            '$codigoVacina',
                                                            '$nomeVacina',
                                                            '$cnes')");
    $affect_rows = mysqli_affected_rows($link);                                                        

    if($affect_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Registro inserido com sucesso.'."</p>";
    header ("Location:../cadastrarVacinas.php");
    else:
        $_SESSION['msg'] = "<p class='center green-text'>".'Inserção não realizada'."</p>";
    endif;