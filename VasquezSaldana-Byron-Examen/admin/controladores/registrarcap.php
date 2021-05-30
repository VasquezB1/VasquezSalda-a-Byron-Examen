<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Capitulo</title>
    <style type="text/css" rel="stylesheet">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
   // $codigo = $_GET["codigo"];
    $codigo1 = $_POST["codigo"];
    $numero = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null;
    $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
    $autor = isset($_POST["autor"]) ? mb_strtoupper(trim($_POST["autor"]), 'UTF-8') : null;
    
    $sql = "INSERT INTO capitulos VALUES (0, '$numero', '$titulo',$codigo1,$autor)";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
    } else {
        if ($conn->errno == 1062) {
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        } else {
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }






    //cerrar la base de datos
    $conn->close();
    echo "<a href='../vista/agregarcap.php?codigo'>Regresar</a>";

    ?>
</body>

</html>