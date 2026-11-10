
<?php
// Requisitos de la tarea
$alumna = "Itzel Ximena Chacon Aviles";
$tarea = "Pagina de bienvenida y saludos";
$escuela = "CBTis 217";
$fecha = date("09/11/2026");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>

<!-- Estilo del formulario -->
    <style>
        body {
            font-family: Arial;
            background: #e0d1f3;
            text-align: center;
            margin: 0;
            padding: 30px;
        }

        .contenedor {
            background: white;
            width: 70%;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px #ffc8ea;
        }

        h1 {
            color: #0d4469;
        }

        p {
            font-size: 18px;
            color: #444;
        }

        .logo {
            font-size: 55px;
            margin: 15px;
        }

        a {
            display: inline-block;
            background: #9fd4f8;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 15px;
        }

        a:hover {
            background: #154360;
        }
    </style>
</head>

<body>
    

<div class="contenedor">

    <img src="cbtis.jpg" alt="Logo de mi escuela" class="logo">

    <h1>¡Bienvenido!</h1>
    <h2><?php echo $alumna; ?></h2>

    <p><b>Escuela:</b> <?php echo $escuela; ?></p>

    <p><b>Nombre de la tarea:</b>
    <?php echo $tarea; ?></p>

    <p><b>Fecha:</b> <?php echo $fecha; ?></p>

    <!-- Enlace con el formulario de saludos -->
    <a href="saludos.php">Ir a Saludos</a>

</div>

</body>
</html>
