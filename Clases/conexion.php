<?php
    $db = mysqli_connect("localhost", "root", "", "servitel");

class Conexion{

    public function Consulta($ID){
        $db = mysqli_connect("localhost", "root", "", "servitel");
        $query = "SELECT IDENTIFICACION, NOMBRE, EMAIL, FEC_NACIMIENTO FROM cliente WHERE ID = " . $ID . " AND ESTADO = '1'";

        $respuesta = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($respuesta)) {
            $DATA = array();
            array_push($DATA, $row);
        }
        return $DATA;
    }

}
?>