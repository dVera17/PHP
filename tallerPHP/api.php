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

    $planetasUnicos = array_diff($sistemaSolar1, $sistemaSolar2);
    header('Location: index.php?planetasUnicos=' . urlencode(json_encode($planetasUnicos)));
    
?>