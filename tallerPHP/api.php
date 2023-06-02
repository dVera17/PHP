<?php

    $planetas = array(
        'sol' => false,
        'mercurio'  => false,
        'venus' => false,
        'tierra' => true,
        'marte' => false,
        'jupiter' => false,
        'saturno' => false, 
        'urano' => false,
        'neptuno' => false
    );

    $planetasHabitables = array_filter($planetas);

    header('Location: index.php?planetasHabitables=' . urlencode(json_encode($planetasHabitables)));
    

?>