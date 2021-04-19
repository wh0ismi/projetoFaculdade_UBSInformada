<?php
include_once 'conexao.php';

$querySelectVacina = $link->query("SELECT dataEmissao, idBeneficiario, unidadeSaude, nomeMedico, crm, areaPrescricao
                                   FROM tb_receituarios 
                                   INNER JOIN tb_beneficiarios on tb_beneficiarios.id = tb_receituarios.idBeneficiario");

while($registros = $querySelectVacina->fetch_assoc()):
    $dataEmissao = $registros['dataEmissao'];
    $idBeneficiario = $registros['idBeneficiario'];
    $unidadeSaude = $registros['unidadeSaude'];
    $nomeMedico = $registros['nomeMedico'];
    $crm = $registros['crm'];
    $areaPrescricao = $registros['areaPrescricao'];
    
    echo "<tr>";
    echo "<td>$dataHoje</td><td>$idBeneficiario</td><td>$unidadeSaude</td><td>$nomeMedico</td><td>$crm</td><td>$areaPrescricao</td>"; 
    echo "</tr>";
endwhile;

