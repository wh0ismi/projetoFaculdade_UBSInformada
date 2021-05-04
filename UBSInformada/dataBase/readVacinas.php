<?php
include_once 'conexao.php';

$querySelectVacina = $link->query("SELECT dataAplicacao, idBeneficiario, unidadeSaude, lote, codigoVacina, nomeVacina, cnes
                                   FROM tb_vacinas 
                                   INNER JOIN tb_beneficiarios on tb_beneficiarios.id = tb_vacinas.idBeneficiario WHERE idBeneficiario='$id'");

if($querySelectVacina->num_rows > 0) {
    while($registros = $querySelectVacina->fetch_assoc()):
        $dataAplicacao = $registros['dataAplicacao'];
        $idBeneficiario = $registros['idBeneficiario'];
        $unidadeSaude = $registros['unidadeSaude'];
        $lote = $registros['lote'];
        $codigoVacina = $registros['codigoVacina'];
        $nomeVacina = $registros['nomeVacina'];
        $cnes = $registros['cnes'];
        
        echo "<tr>";
        echo "<td>$dataAplicacao</td><td>$idBeneficiario</td><td>$unidadeSaude</td><td>$lote</td><td>$codigoVacina</td><td>$nomeVacina</td><td>$cnes</td>"; 
        echo "</tr>";
    endwhile;
}else {
    echo "<tr>";
    echo "<td colspan='7'>Nenhum resultado encontrado!</td>"; 
    echo "</tr>";
}


