<?php
session_start();
include_once 'conexao.php';

$id = $_SESSION['id'];

$nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$numeroContato = filter_input(INPUT_POST, 'numeroContato', FILTER_SANITIZE_SPECIAL_CHARS);
$enderecoCompleto = filter_input(INPUT_POST, 'enderecoCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("UPDATE tb_beneficiario
                            SET nomeCompleto='$nomeCompleto',
                                cpf='$cpf',
                                dataNascimento='$dataNascimento',
                                email='$email',
                                numeroContato='$numeroContato',
                                enderecoCompleto='$enderecoCompleto',
                                cep='$cep'
                            WHERE id='$id'");

    $affected_rows = mysqli_affected_rows($link);    
    
    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Atualização realizada com sucesso.'."</p>";
        header("Location:../consultas.php");
    else:
        $_SESSION['msg'] = "<p class='center green-text'>".'Inserção não realizada'."</p>";
    endif;

            