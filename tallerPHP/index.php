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
        <input type="submit" value="Mostrar Planetas Habitables" class="btn-submit">
    </form>
    <div class="result">
        <?php
            if (isset($_GET['planetasHabitables'])) {
                // Decodificar el parámetro 'planetas' para obtener el array original
                $planetas = urldecode($_GET['planetasHabitables']);
                // Convertir la cadena codificada en formato JSON a un array asociativo
                $planetas = json_decode($planetas, true);
                // Recorrer el array y mostrar los valores
                foreach ($planetas as $planeta => $estado) {
                    echo 'Planeta ' . $planeta;
                }
            }
        ?>
    </div>
    </div>
</body>
</html>