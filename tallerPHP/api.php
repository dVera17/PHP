<?php

    $flota = array(
        'nave1' => 50,
        'nave2'  => 100,
        'nave3' => 150,
        'nave4' => 200,
        'nave5' => 250
    );

    $masaTotal = array_sum($flota);

    header('Location: index.php?masaTotal=' . urlencode($masaTotal));
    
?>