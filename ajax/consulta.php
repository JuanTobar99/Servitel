<?php 
include '../Clases/conexion.php';

$query = "SELECT ID, NOMBRE, EMAIL, FEC_NACIMIENTO, FEC_CREACION  FROM cliente WHERE ESTADO = '1'";

if (!empty($_POST['nombre'])) {
    $nom = $_POST['nombre'];
    $query = "SELECT ID, NOMBRE, EMAIL, FEC_NACIMIENTO, FEC_CREACION FROM cliente WHERE NOMBRE LIKE '" . $nom . "%' AND ESTADO = '1'"; 
}

$tr = "<table id='lines'>";

$respuesta = mysqli_query($db, $query);

$meses = [
    '01' => 'Enero',
    '02' => 'Febrero',
    '03' => 'Marzo',
    '04' => 'Abril',
    '05' => 'Mayo',
    '06' => 'Junio',
    '07' => 'Julio',
    '08' => 'Agosto',
    '09' => 'Septiembre',
    '10' => 'Octubre',
    '11' => 'Noviembre',
    '12' => 'Diciembre'
];

while ($row = mysqli_fetch_array($respuesta)) {
    $fec_nac = explode('-', $row['FEC_NACIMIENTO']);
    $fec_cre = explode('-', $row['FEC_CREACION']);
        
    $tr.= '<tbody id="limit"><tr>
            <td rowspan="2" width="10%"><img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" width="100px" alt="Profile_pic"></td>
            <td width="65%"><b>' . $row['NOMBRE'] . '</b></td>
            <td class="right-align" colspan="2">' . $fec_nac[2] . " " . $meses[$fec_nac[1]] . " " . $fec_nac[0] . ' | ' . $fec_cre[2] . " " . $meses[$fec_cre[1]] . " " . $fec_cre[0] . '</td>
          </tr>
          <tr>
            <td>' . $row['EMAIL'] . '</td>
            <td colspan="2" class="right-align">
                <a href="Modifica_reg.php?id=' . $row['ID'] . '" class="waves-effect waves-light btn blue"><i class="material-icons center">edit</i></a>
                <a href="ajax/Elimina_reg.php?id=' . $row['ID'] . '"class="waves-effect waves-light btn red"><i class="material-icons center">delete</i></a>
            </td>
          </tr></tbody>';
}

$tr.= "<table>";

echo $tr;

?>