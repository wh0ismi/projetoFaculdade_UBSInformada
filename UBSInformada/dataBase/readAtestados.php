<?php
include_once 'conexao.php';

$querySelectAtestados = $link->query("SELECT dataEmissao, idBeneficiario, unidadeSaude, crm, diasAfastados, dataInicio, dataFinal
                                   FROM tb_atestados 
                                   INNER JOIN tb_beneficiarios on tb_beneficiarios.id = tb_atestados.idBeneficiario  WHERE idBeneficiario='$id'");


if($querySelectAtestados->num_rows > 0) {
    while($registros = $querySelectAtestados->fetch_assoc()):
        $dataEmissao = $registros['dataEmissao'];
        $idBeneficiario = $registros['idBeneficiario'];
        $unidadeSaude = $registros['unidadeSaude'];
        $crm = $registros['crm'];
        $diasAfastados = $registros['diasAfastados'];
        $dataInicio = $registros['dataInicio'];
        $dataFinal = $registros['dataFinal'];
        echo "<tr>";
        echo "<td>$dataEmissao</td><td>$idBeneficiario</td><td>$unidadeSaude</td><td>$crm</td><td>$diasAfastados</td><td>$dataInicio</td><td>$dataFinal</td>"; 
        echo "</tr>";
    endwhile;
}else {
    echo "<tr>";
    echo "<td colspan='7'>Nenhum resultado encontrado!</td>"; 
    echo "</tr>";
}


