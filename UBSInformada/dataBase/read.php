<?php
include_once 'conexao.php';

$querySelect = $link->query("SELECT * FROM tb_beneficiario");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nomeCompleto = $registros['nomeCompleto'];
    $cpf = $registros['cpf'];
    
    echo "<tr>";
    echo "<td>$id</td><td>$nomeCompleto</td><td>$cpf</td>";
    echo "<td><a href='viewBeneficiario.php?id=$id'><i class='material-icons'>add</i></a></td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";     
    echo "<td><a href='viewBeneficiario.php?id=$id'><i class='material-icons'>delete_forever</i></td>";
    echo "</tr>";
 
endwhile;