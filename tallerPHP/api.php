<?php

    $planetas = array(
        'sol',
        'mercurio',
        'venus',
        'tierra',
        'marte',
        'jupiter',
        'saturno',
        'urano',
        'neptuno'
    );
    
    $clavePlaneta = array_rand($planetas, 1);

    header('Location: index.php?planetas=' . urlencode(json_encode($planetas[$clavePlaneta])));
    
?>