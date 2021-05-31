<?php
//incluir conexión a la base de datos
include "../../config/conexionBD.php";
$nombre = $_GET['nombre'];


$sql = "SELECT * FROM autores where aut_nombre = '$nombre'";
$result = $conn->query($sql);

echo " <table style='width:100%'>
        <tr>
        <th>Nombre autor </th>
        <th>Nombre libro</th>
        <th>ISBN</th>  
        <th>Numero de paginas </th>
        <th>Titulo del capitulo</th>
        
    </tr>";
//echo ($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $sql2 = "SELECT * FROM capitulos WHERE cap_aut_id = " . $row['aut_codigo'] . "";
        $result2 = $conn->query($sql2);

       // echo ($sql2);
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $sql3 = "SELECT lib_nombre, lib_isbn, lib_paginas FROM libro WHERE lib_codigo = " . $row2['cap_lib_id'] . "";
                $result3 = $conn->query($sql3);
                //echo ($sql3);
                if ($result3->num_rows > 0) {
                    while ($row3 = $result3->fetch_assoc()) {
                        echo "<tr>";
                        echo " <td>" . $row['aut_nombre'] . "</td>";
                        echo " <td>" . $row3['lib_nombre'] . "</td>";
                        echo " <td>" . $row3['lib_isbn'] . "</td>";
                        echo " <td>" . $row3['lib_paginas'] . "</td>";
                        echo " <td>" . $row2['cap_titulo'] . "</td>";
                        echo "</tr>";
                   
                    }
                } else {
                    echo "<tr>";
                    echo " <td colspan='7'> No existen Libros registrados </td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen cap aut registrados </td>";
            echo "</tr>";
        }
    }
} else {
    echo "<tr>";
    echo " <td colspan='7'> No existen autores registrados </td>";
    echo "</tr>";
}
$conn->close();
