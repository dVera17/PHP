<?php

// Funciones para imprimir en el html

echo "Texto a imprimir";

$texto = "Mundo";
printf("Hola %s", $texto);

$texto = "Mundo"; 
$mensaje = sprintf("Hola %s", $texto);
echo $mensaje;

// VARIABLES

/**
 * Las variables son definidas usando el simbolo $
 */

 //Variable númerica
 $edad = 25;

// Variable de texto;
$nombre = "Santiago";

// Variable booleana
$esValido = true;
echo var_dump($nombre);

// CONSTANTES

// Variable númerica
define("PI", 3.1416);

// Declarar una constante de texto
define("SALUDO", "hola");

// Declarar una constante booleana
define("ESVALIDO", true);

// Boolean
$esValido = true;
echo var_dump($nombre);

// ENTEROS
$edad = 25;
echo var_dump($edad);

// FLOATS
$float = 24.5;
echo var_dump($float);

// Strings
$nombre = "Santiago";
echo var_dump($nombre);

$array = [];
var_dump($array);

