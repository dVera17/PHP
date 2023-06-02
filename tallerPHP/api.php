<?php

    $planetas = array(
        'sol' => 28.04,
        'mercurio'  => 0.377,
        'venus' => 0.903,
        'tierra' => 1,
        'marte' => 0.37,
        'jupiter' => 2.52,
        'saturno' => 1.06, 
        'urano' => 0.903,
        'neptuno' => 1.13
    );

    function calcularGravedad($planetas){
        return $planetas * 9.8;
    }

    $gravedadPlanetas = array_map('calcularGravedad', $planetas);

    header('Location: index.php?gravedadPlanetas=' . urlencode(json_encode($gravedadPlanetas)));
    
?>