<?php

    $sistemaSolar = array(
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

    $ordenDescendente = array_reverse($sistemaSolar);
    header('Location: index.php?ordenDescendente=' . urlencode(json_encode($ordenDescendente)));
?>