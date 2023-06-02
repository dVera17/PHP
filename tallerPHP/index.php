<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="contenedor">
    <form action="api.php" class="form" method="POST">
        <input type="number" name="numero" placeholder="Número del planeta">
        <input type="submit" value="Buscar">
    </form>
    <div class="result">
        <?php
            if(isset($_GET['planetaSeleccionado'])){
                echo $_GET['planetaSeleccionado'];
            } else {}
        ?>
    </div>
    </div>
</body>
</html>