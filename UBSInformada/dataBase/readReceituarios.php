<?php
include_once 'conexao.php';

$querySelectReceituario = $link->query("SELECT dataEmissao, idBeneficiario, unidadeSaude, nomeMedico, crm
                                   FROM tb_receituarios 
                                   INNER JOIN tb_beneficiarios on tb_beneficiarios.id = tb_receituarios.idBeneficiario");

while($registros = $querySelectReceituario->fetch_assoc()):
    $dataEmissao = $registros['dataEmissao'];
    $idBeneficiario = $registros['idBeneficiario'];
    $unidadeSaude = $registros['unidadeSaude'];
    $nomeMedico = $registros['nomeMedico'];
    $crm = $registros['crm'];
    
    echo "<tr>";
    echo "<td>$dataEmissao</td><td>$idBeneficiario</td><td>$unidadeSaude</td><td>$nomeMedico</td><td>$crm</td>"; 
    echo "</tr>";
endwhile;

