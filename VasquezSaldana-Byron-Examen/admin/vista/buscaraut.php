<?php
//incluir conexión a la base de datos
include "../../../config/conexionBD.php";
$nombre = $_GET['nombre'];


$sql = "SELECT * FROM libro WHERE aut_nombre=$nombre";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row["lib_nombre"] . "</td>";
        echo " <td>" . $row['lib_isbn'] . "</td>";
        echo " <td>" . $row['lib_paginas'] . "</td>";
        echo " <td> <a href='agregarcap.php?codigo=" . $row['lib_codigo'] . "'>Agregar Capitulo</a> </td>";
        echo "</tr>";
    }
} else {
    echo "<tr>";
    echo " <td colspan='7'> No existen usuarios registrados </td>";
    echo "</tr>";
}
$conn->close();

//cambiar la consulta para puede buscar por ocurrencias de letras
$result = $conn->query($sql);
echo " <table style='width:100%'>
 <tr>
 <th>Cedula</th>
 <th>Nombres</th> 
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Correo</th>
 <th>Telefono</th>
 <th>Tipo</th>
 <th>Operadora</th>
 <th></th>
 <th></th>
 <th></th> 
 </tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo " <td>" . $row['usu_cedula'] . "</td>";
        echo " <td>" . $row['usu_nombres'] . "</td>";
        echo " <td>" . $row['usu_apellidos'] . "</td>";
        echo " <td>" . $row['usu_direccion'] . "</td>";
        echo " <td>" . $row['usu_correo'] . "</td>";
        echo " <td>" . $row['tele_numero'] . "</td>";
        echo " <td>" . $row['tele_tipo'] . "</td>";
        echo " <td>" . $row['tele_operadora'] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr>";
    echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
    echo "</tr>";
}
echo "</table>";
$conn->close();
