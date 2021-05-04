<?php
session_start();
include_once 'conexao.php';

$dataAplicacao = filter_input(INPUT_POST, 'dataAplicacao');
$idBeneficiario = filter_input(INPUT_POST, 'idBeneficiario', FILTER_SANITIZE_NUMBER_INT);
$unidadeSaude = filter_input(INPUT_POST, 'unidadeSaude', FILTER_SANITIZE_SPECIAL_CHARS);
$lote = filter_input(INPUT_POST, 'lote', FILTER_SANITIZE_SPECIAL_CHARS);
$codigoVacina = filter_input(INPUT_POST, 'codigoVacina', FILTER_SANITIZE_SPECIAL_CHARS);
$nomeVacina = filter_input(INPUT_POST, 'nomeVacina', FILTER_SANITIZE_SPECIAL_CHARS);
$cnes = filter_input(INPUT_POST, 'cnes', FILTER_SANITIZE_SPECIAL_CHARS);

$queryInsert = $link->query("insert into tb_vacinas values(default,
                                                            '$dataAplicacao',
                                                            '$idBeneficiario',
                                                            '$unidadeSaude',
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