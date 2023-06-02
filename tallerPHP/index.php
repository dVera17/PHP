<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="contenedor">
    <form action="api.php" method='POST' class="form">
        <input type="text" class="inp-Text" name="nombre" placeholder="Nombre del planeta para verificar si existe">
        <input type="submit" value="Verificar existencia" class="btn-submit">
    </form>
    <div class="result">
        <?php
            if (isset($_GET['existencia'])) {
                // Decodificar el parámetro 'planetas' para obtener el array original
                $existencia = urldecode($_GET['existencia']);
                echo $existencia;
            }
        ?>
    </div>
    </div>
</body>
</html>