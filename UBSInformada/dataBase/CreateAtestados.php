<?php
session_start();
include_once 'conexao.php';

$dataEmissao = filter_input(INPUT_POST, 'dataEmissao');
$idBeneficiario = filter_input(INPUT_POST, 'idBeneficiario', FILTER_SANITIZE_NUMBER_INT);
$unidadeSaude = filter_input(INPUT_POST, 'unidadeSaude', FILTER_SANITIZE_SPECIAL_CHARS);
$nomeMedico = filter_input(INPUT_POST, 'nomeMedico', FILTER_SANITIZE_SPECIAL_CHARS);
$crm = filter_input(INPUT_POST, 'crm', FILTER_SANITIZE_SPECIAL_CHARS);
$diasAfastados = filter_input(INPUT_POST, 'diasAfastados', FILTER_SANITIZE_NUMBER_INT);
$dataInicio = filter_input(INPUT_POST, 'dataInicio');
$dataFinal = filter_input(INPUT_POST, 'dataFinal');
$areaCiencia = filter_input(INPUT_POST, 'areaCiencia', FILTER_SANITIZE_SPECIAL_CHARS);

$queryInsert = $link->query("insert into tb_atestados values(default,
                                                            '$dataEmissao',
                                                            '$idBeneficiario',
                                                            '$unidadeSaude',
                                                            '$nomeMedico',
                                                            '$crm',
                                                            '$diasAfastados',
                                                            '$dataInicio',    
                                                            '$dataFinal',
                                                            '$areaCiencia')");
    $affect_rows = mysqli_affected_rows($link);                                                        

    if($affect_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Registro inserido com sucesso.'."</p>";
        header("Location:../cadastrarReceituarios.php");
    else:
        $_SESSION['msg'] = "<p class='center red-text'>".'Inserção não realizada'."</p>";
    endif;
