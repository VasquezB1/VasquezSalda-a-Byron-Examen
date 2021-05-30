<!DOCTYPE html>
<html>

<head>
    <link href="../../css/estilos1.css" rel="stylesheet" />
    <link href="../../css/indexadmin.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <title>Agregar Capitulos</title>
    
    <style type="text/css">
       
    </style>

</head>

<body>
    <header class="enc1">
        <img class="logo" src="../../images/LOGO UPS -01.png" alt="Logo UPS" />
        <img class="icono" src="../../images/usuario.png" alt="Usuario" />
        <img class="icono" src="../../images/charla.png" alt="Mensajes" />
        <img class="icono" src="../../images/mas.png" alt="Mas" />

        <br><br><br><br>
    </header>
    
    <?php
    $codigo = $_GET["codigo"];
    ?>
    <form class="formu" id="formulario01" method="POST" action="../controladores/registrarcap.php">

        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <label for="numero">Número (*)</label>
        <input type="text" id="numero" name="numero" value="" placeholder="Ingrese el número de capitulo"/>
        
        <br><br>

        <label for="titulo">Titulo (*)</label>
        <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo" />  
        <br><br>
        <label for="autor">Autor (*)</label>
        <input type="text" id="autor" name="autor" value="" placeholder="Ingrese el id del autor" />         
    
        <br><br>


        <input class="boton" type="submit" id="crear" name="crear" value="Crear" />
        <input class="boton" type="reset" id="cancelar" onclick="location.href='index.html'" name="cancelar" value="Cancelar" />
        <br><br>
    </form>

    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>   
            <th>Nacionalidad</th>     
        </tr>
        <?php
        include '../../config/conexionBD.php';
        //$codigo2 = $_GET["codigo2"];
        $sql = "SELECT * FROM autores ";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo " <td>" . $row["aut_codigo"] . "</td>";
                echo " <td>" . $row['aut_nombre'] . "</td>";
                echo " <td>" . $row['aut_nacionalidad'] . "</td>";    
                                       
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