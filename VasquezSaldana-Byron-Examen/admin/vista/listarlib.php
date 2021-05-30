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
    
    <center>
        <h2>AÑADIR DATOS DEL LIBRO</h2>
    </center>

    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>ISBN</th>
            <th>Número Paginas</th>           
        </tr>
        <?php
        include '../../config/conexionBD.php';
       // $codigo = $_GET["codigo"];
        $sql = "SELECT * FROM libro ";
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
        ?>

        
        <br>   <br>
    </table>

    <footer>
        Byron Simon Vasquez Saldaña&#8226; Universidad Politecnica Salesiana, <a href="https://mail.google.com/mail/u/0/#inbox">bvasquezs@est.ups.edu.ec</a> &#8226;
        <a href=”0987815997”> 0987815997 </a><br>        
        <br>© Todos los derechos reservados<br>

        
        <br>

    </footer>
</body>

</html>