<?php
include_once 'conexao.php';

$querySelect = $link->query("SELECT * FROM tb_beneficiarios");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nomeCompleto = $registros['nomeCompleto'];
    $cpf = $registros['cpf'];
    
    echo "<tr>";
    echo "<td>$id</td><td>$nomeCompleto</td><td>$cpf</td>";
    echo "<td><a href='viewBeneficiarios.php?id=$id'><i class='material-icons'>add</i></a></td>";
    echo "<td><a href='editarBeneficiarios.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='dataBase/delete.php?id=$id'><i class='material-icons'>delete_forever</i></a></td>";     
    echo "</tr>";
 
endwhile;