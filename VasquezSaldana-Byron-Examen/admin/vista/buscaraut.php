<!DOCTYPE html>
<html>

<head>
    <link href="../../css/estilos1.css" rel="stylesheet" />
    <link href="../../css/indexadmin.css" rel="stylesheet" />
    <script type="text/javascript" src="../../js/buscar.js"></script>
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


    <h2>Buscar Libro</h2>
    <form class="buscar" onsubmit="return buscarxpNombre()">
        <input type="text" id="nombre" name="nombre" value="">
        <input class="boton" type="button" id="buscar" name="buscar" value="Buscar" onclick="buscarxpNombre()">
    </form>
    <br><br>
    <div id="informacion"><b></b></div>
    <br><br>


    <footer>
        Byron Simon Vasquez Saldaña&#8226; Universidad Politecnica Salesiana, <a href="https://mail.google.com/mail/u/0/#inbox">bvasquezs@est.ups.edu.ec</a> &#8226;
        <a href=”0987815997”> 0987815997 </a><br>

        <br>© Todos los derechos reservados<br>


        <br>

    </footer>
</body>

</html>