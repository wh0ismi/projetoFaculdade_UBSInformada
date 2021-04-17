<?php
session_start();
include_once 'conexao.php';

$nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$numeroContato = filter_input(INPUT_POST, 'numeroContato', FILTER_SANITIZE_NUMBER_INT);
$enderecoCompleto = filter_input(INPUT_POST, 'enderecoCompleto', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);


$querySelect = $link->query("select email from tb_beneficiario");
$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails, $emails_existentes);
endwhile;

if (in_array($email, $array_emails)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cadastro com esse e-mail.'."</p>";
    header("Location:../");
else: 
    $queryInsert = $link->query("insert into tb_beneficiario values(default,
                                                                       '$nomeCompleto',
                                                                       '$cpf',
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