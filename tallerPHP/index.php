<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 12</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="contenedor">
    <form action="api.php" method='POST' class="form">
        <select class="inp-Text" name="planeta" id="planeta">
            <option value="Mercurio">Mercurio</option>
            <option value="Venus">venus</option>
            <option value="Tierra">Tierra</option>
            <option value="Marte">Marte</option>
            <option value="Jupiter">Jupiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Urano">Urano</option>
            <option value="Neptuno">Neptuno</option>
        </select> <br>
        <input class="inp-Text" type="text" name="satelite" placeholder="Nombre del satelite">
        <input type="submit" value="Planetas unicos" class="btn-submit">
    </form>
    <div class="result">
        <?php
            if (isset($_GET['existe'])) {
                $satelite = urldecode($_GET['existe']);
                echo $satelite;
            }
        ?>
    </div>
    </div>
</body>
</html>