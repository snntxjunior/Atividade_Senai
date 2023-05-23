<?php

require_once '../conn.php';
$id_marcio = filter_input(INPUT_POST,'id_cesta');
$ano_marcio= filter_input(INPUT_POST, 'ano_cesta');
$valor_marcio = filter_input(INPUT_POST, 'valor_cesta');


$stmt = $conn->prepare("UPDATE cesta SET anocesta = :ANO, valorcesta = :VALOR WHERE idcesta = :ID");


$stmt->bindValue(':ID', $id_cesta);
$stmt->bindValue(':ANO', $ano_cesta);
$stmt->bindValue(':VALOR', $valor_cesta);
$stmt->execute();

header("Location: index_cesta.php");
?>