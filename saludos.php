
<?php
$idioma = "";
$saludo = "";

if (isset($_POST["idioma"])) {

    $idioma = $_POST["idioma"];

    if ($idioma == "espanol") {
        $saludo = "¡Hola! ¿Cómo estás?";
    }
    elseif ($idioma == "ingles") {
        $saludo = "Hello! How are you?";
    }
    elseif ($idioma == "frances") {
        $saludo = "Bonjour! Comment ça va?";
    }
    elseif ($idioma == "italiano") {
        $saludo = "Ciao! Come stai?";
    }
    elseif ($idioma == "aleman") {
        $saludo = "Hallo! Wie geht's?";
    }
    elseif ($idioma == "japones") {
        $saludo = "こんにちは (Konnichiwa)";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludos</title>

    <style>
        body {
            font-family: Arial;
            background: #e0d1f3;
            text-align: center;
            padding: 40px;
        }

        .contenedor {
            background: white;
            width: 60%;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px #ffc8ea;
        }

        h1 {
            color: #2471a3;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        button {
            background: #2471a3;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #154360;
        }

        .resultado {
            color: #2471a3;
            font-size: 25px;
            margin-top: 25px;
            font-weight: bold;
        }

        a {
            color: #2471a3;
            display: block;
            margin-top: 25px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Saludos en diferentes idiomas</h1>

    <p>Selecciona un idioma:</p>

    <form method="POST">

        <select name="idioma" required>
            <option value="">Selecciona...</option>
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="italiano">Italiano</option>
            <option value="aleman">Alemán</option>
            <option value="japones">Japonés</option>
        </select>

        <br><br>

        <button type="submit">Mostrar saludo</button>

    </form>

    <?php
    if ($saludo != "") {
        echo "<div class='resultado'>$saludo</div>";
    }
    ?>

    <a href="bienvenida.php">Regresar a bienvenida</a>

</div>

</body>
</html>
