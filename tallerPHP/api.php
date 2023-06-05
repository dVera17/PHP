<?php

$satelite=$_POST['satelite'];
$planeta=$_POST['planeta'];

$planetas=[
  "Mercurio"=> [
    "satelites"=>[]
  ],
  "Venus"=> [
    "satelites"=>[]
  ],
  "Tierra"=> [
    "satelites"=>[]
  ],
  "Marte"=> [
    "satelites"=>[]
  ],
  "Jupiter"=> [
    "satelites"=>[]
  ],
  "Saturno"=> [
    "satelites"=>[]
  ],
  "Urano"=> [
    "satelites"=>[]
  ],
  "Neptuno"=> [
    "satelites"=>[]
  ]
];

array_push($planetas[$planeta]['satelites'],$satelite);
header('Location: index.php?existe=' . urlencode(json_encode($planetas[$planeta]['satelites'])) . '&planeta=' . urlencode(json_encode($planetas)));
    
?>