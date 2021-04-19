<?php
session_start();
include_once 'conexao.php';

$nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$numeroContato = filter_input(INPUT_POST, 'numeroContato', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
$enderecoCompleto = filter_input(INPUT_POST, 'enderecoCompleto', FILTER_SANITIZE_SPECIAL_CHARS);

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
                                                                    '$cep',
                                                                    '$enderecoCompleto')");
    $affect_rows = mysqli_affected_rows($link);
    
    if($affect_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro realizado com sucesso.'."</p>";
    header ("Location:../consultas.php");
    endif;
endif;