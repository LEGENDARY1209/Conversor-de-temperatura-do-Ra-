<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Conversor de Temperatura</title>
    <style>
        body {
            background-color: #f2f7ff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #336699;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['tipoTemp']) && isset($_POST['temp'])) {
        $tipoTemp = $_POST['tipoTemp'];
        $temperatura = $_POST['temp'];

        if ($tipoTemp == 1) {
            $resultado = ($temperatura * 9/5) + 32;
            echo "<h1>Resultado</h1>";
            echo "<p>A temperatura em Fahrenheit é $resultado ºF.</p>";
        } elseif ($tipoTemp == 2) {
            $resultado = ($temperatura - 32) * 5/9;
            echo "<h1>Resultado</h1>";
            echo "<p>A temperatura em Celsius é $resultado ºC.</p>";
        }
    }
    ?>
</body>
</html>