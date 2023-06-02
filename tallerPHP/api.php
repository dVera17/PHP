<?php

    $planetas = array(
        'sol' => 1,
        'mercurio'  => 2,
        'venus' => 3,
        'tierra' => 4,
        'marte' => 5,
        'jupiter' => 6,
        'saturno' => 7, 
        'urano' => 8,
        'neptuno' => 9
    );

    $planetaSeleccionado = array_flip($planetas)[intval($_POST['numero'])];

    header('Location: index.php?planetaSeleccionado=' . urlencode($planetaSeleccionado))
    

?>