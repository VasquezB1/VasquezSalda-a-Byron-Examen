<?php
//incluir conexión a la base de datos
include '../../config/conexionBD.php';
$nombre = $_GET['nombre'];

$sql = "SELECT * FROM autores where aut_nombre = '$nombre'";

$result = $conn->query($sql);
echo " <table>
 <tr>
 <th>ID Autor</th>
 <th>Nombre Autor</th>
 <th>Nacionalidad Autor</th>
 </tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row['aut_codigo'] . "</td>";
        echo " <td>" . $row['aut_nombre'] . "</td>";
        echo " <td>" . $row['aut_nacionalidad'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr>";
    echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
    echo "</tr>";
}
echo "</table>";
$conn->close();
