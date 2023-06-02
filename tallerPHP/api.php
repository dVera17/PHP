<?php

    $tipoNave = array(
        'tipo1',
        'tipo2',
        'tipo3',
        'tipo4',
        'tipo5'
    );
    
    $existencia = '';
    if(in_array(strtolower(str_replace(' ', '',$_POST['nombre'])), $tipoNave)) $existencia = 'El tipo de nave EXISTE';
    else $existencia = 'El tipo de nave NO EXISTE';

    header('Location: index.php?existencia=' . urlencode(json_encode($existencia)));
    
?>