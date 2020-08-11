<?php
include '../Clases/conexion.php';

$data = file_get_contents('php://input');
$json = json_decode($data, true);
$json['birth'] = str_replace('/', '-', $json['birth']);

$query = "UPDATE cliente SET NOMBRE = '" . $json['name'] . "', IDENTIFICACION = " . $json['cc'] . ", EMAIL = '" . $json['email'] . "', FEC_NACIMIENTO = '" . $json['birth'] . "' WHERE ID = " . $json['id'];

$respuesta = mysqli_query($db, $query);

?>