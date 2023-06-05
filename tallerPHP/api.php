<?php

    $sistemaSolar1 = array(
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

    $sistemaSolar2 = array(
        'sol',
        'sol1',
        'pluton',
        'estrella',
        'planetas52',
        'luna',
        'saturno',
        'urano',
        'neptuno'
    );

    $valoresComunes = array_intersect($sistemaSolar1, $sistemaSolar2);
    header('Location: index.php?valoresComunes=' . urlencode(json_encode($valoresComunes)));
    
?>