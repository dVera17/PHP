<?php

    $planetas = [
        'sol',
        'mercurio',
        'venus',
        'tierra',
        'marte',
        'jupiter',
        'saturno',
        'urano', 
        'neptuno'
    ];

    $existencia = '';
    if(in_array(strtolower(($_POST['nombre'])), $planetas)) $existencia = 'El planeta existe';
    else $existencia = 'El planeta NO existe';
    header('Location: index.php?existencia=' . urlencode($existencia));
    
?>