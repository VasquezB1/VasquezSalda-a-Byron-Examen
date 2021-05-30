<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista Libros</title>
    <link href="../../css/indexadmin.css" rel="stylesheet" />
</head>

<body>
    <header class="enc1">
        <img class="logo" src="../../images/LOGO UPS -01.png" alt="Logo UPS" />
        <div class="buscar" id="searchform">

        </div>
        <img class="icono" src="../../images/usuario.png" alt="Usuario" />
        <img class="icono" src="../../images/charla.png" alt="Mensajes" />
        <img class="icono" src="../../images/mas.png" alt="Mas" />

        <br><br><br><br>
    </header>
    <h2>Lista De Libros</h2>

    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>ISBN</th>
            <th>Número Paginas</th>
            <th>Capitulo Libro</th>
            <th>Titulo Capitulo</th>
            <th>Nombre Autor</th>
            <th>Nacionalidad Autor</th>
        </tr>
        <?php
        include '../../config/conexionBD.php';
        $sql = "SELECT * FROM libro";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo " <td>" . $row['lib_nombre'] . "</td>";
                echo " <td>" . $row['lib_isbn'] . "</td>";
                echo " <td>" . $row['lib_paginas'] . "</td>";

                $sql3 = "SELECT * FROM capitulos where cap_lib_id =" . $row['lib_codigo'] . " ";
                $result3 = $conn->query($sql3);
                if ($result3->num_rows > 0) {

                    while ($row3 = $result3->fetch_assoc()) {


                        echo " <td>" . $row3['cap_numero'] . "</td>";
                        echo " <td>" . $row3['cap_titulo'] . "</td>";

                        $sql2 = "SELECT * FROM autores where aut_codigo =" . $row3['cap_aut_id'] . " ";
                        $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {

                                echo " <td>" . $row2['aut_nombre'] . "</td>";
                                echo " <td>" . $row2['aut_nacionalidad'] . "</td>";
                            }
                        }
                        echo "</tr>";
                        echo " <td></td>";
                        echo " <td></td>";
                        echo " <td></td>";
                    }
                }

                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }

        $conn->close();
        ?>

        <br> <br>
    </table>

    <footer>
        Byron Simon Vasquez Saldaña&#8226; Universidad Politecnica Salesiana, <a href="https://mail.google.com/mail/u/0/#inbox">bvasquezs@est.ups.edu.ec</a> &#8226;
        <a href=”0987815997”> 0987815997 </a><br>
        <br>© Todos los derechos reservados<br>


        <br>

    </footer>
</body>

</html>