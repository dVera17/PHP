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
        <input type="submit" value="Mostrar Planetas" class="btn-submit">
    </form>
    <div class="result">
        <?php
            if (isset($_GET['planetas'])) {
                // Decodificar el parámetro 'planetas' para obtener el array original
                $planetas = urldecode($_GET['planetas']);
        
                // Convertir la cadena codificada en formato JSON a un array asociativo
                $planetas = json_decode($planetas, true);
        
                // Recorrer el array y mostrar los valores
                foreach ($planetas as $planeta => $estado) {
                    echo $planeta . ': ' . $estado . '<br>';
                }
            }
        ?>
    </div>
    </div>
</body>
</html>