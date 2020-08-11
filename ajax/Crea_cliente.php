<?php
include '../Clases/conexion.php';

$data = file_get_contents('php://input');
$json = json_decode($data, true);
$json['birth'] = str_replace('/', '-', $json['birth']);

$query = "INSERT INTO cliente VALUES(NULL, " . $json['cc']. ", '" . $json['name'] . "', '" . $json['email'] . "', '" . $json['birth'] . "', CURRENT_DATE(), '1')";

$respuesta = mysqli_query($db, $query);

?>