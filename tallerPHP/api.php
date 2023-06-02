<?php

$planetas = array(
    'planeta1' => 'deshabitado',
    'planeta2' => 'deshabitado',
    'planeta3' => 'deshabitado',
    'planeta4' => 'deshabitado',
    'planeta5' => 'deshabitado',
    'planeta6' => 'deshabitado',
    'planeta7' => 'deshabitado',
);


/**
 * La función json_encode en PHP se utiliza para convertir un valor PHP en una cadena JSON. 
 * Toma como entrada un valor de cualquier tipo compatible con JSON, como un array asociativo, un array indexado o un objeto
 * y devuelve una representación JSON de ese valor.
 */
$planetasJson = json_encode($planetas);
header('Location: index.php?planetas=' . urlencode($planetasJson));
    

?>