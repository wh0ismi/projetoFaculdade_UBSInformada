<?php
include_once 'conexao.php';

$querySelect = $link->query("SELECT * FROM tb_beneficiario");
while($registros = $querySelect->fetch_assoc()):
    $nomeCompleto = $registros['nomeCompleto'];
    $cpf = $registros['cpf'];
    $dataNascimento = $registros['dataNascimento'];
    $email = $registros['email'];
    $numeroContato = $registros['numeroContato'];
    $enderecoCompleto = $registros['enderecoCompleto'];
    $cep = $registros['cep'];
endwhile;