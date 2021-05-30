<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Libro</title>
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
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"],'UTF-8') : null;
    $isbn = isset($_POST["isbn"]) ? mb_strtoupper(trim($_POST["isbn"])) : null;
    $paginas = isset($_POST["paginas"]) ? mb_strtoupper(trim($_POST["paginas"])) : null;
    
    $sql = "INSERT INTO libro VALUES (0, '$nombre', '$isbn', '$paginas')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Se ha creado el libro correctamemte!!!</p>";
    } else {
        if ($conn->errno == 1062) {
            echo "<p class='error'>El libro con el ISBN $isbn Ya esta registrado. </p>";
        } else {
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    //cerrar la base de datos
    $conn->close();
    echo "<a href='../vista/crearlib.html'>Regresar</a>";

    ?>
</body>

</html>