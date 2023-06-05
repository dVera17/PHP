<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 13</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="contenedor">
    <form action="api.php" method='POST' class="form">
        <input type="submit" value="Mostrar planetas en orden descendente" class="btn-submit">
    </form>
    <div class="result">
        <?php
            if (isset($_GET['ordenDescendente'])) {
                $ordenDescendente = urldecode($_GET['ordenDescendente']);
                echo $ordenDescendente;
            }
        ?>
    </div>
    </div>
</body>
</html>