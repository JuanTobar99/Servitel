<?php

error_reporting(0);
include '../Clases/conexion.php';

$query = "UPDATE cliente SET ESTADO = '0' WHERE id = " . $_GET['id'];

$ejecucion = mysqli_query($db, $query);

header("Location: ../index.php");

?>