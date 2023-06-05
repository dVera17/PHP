<?php

    $especiesAlienigenas = array(
        'especiesAlienigena1',
        'especiesAlienigena2',
        'especiesAlienigena3',
        'especiesAlienigena4',
        'especiesAlienigena5',
        'especiesAlienigena6',
        'especiesAlienigena7',
        'especiesAlienigena8',
        'especiesAlienigena9',
        'especiesAlienigena9',
        'especiesAlienigena1'
    );

    $noDuplicado = array_unique($especiesAlienigenas);

    header('Location: index.php?especiesAlienigenas=' . urlencode(json_encode($especiesAlienigenas)));
    header('Location: index.php?noDuplicado=' . urlencode(json_encode($noDuplicado)));
    
?>