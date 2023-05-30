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

// Números y operadores

$numero1 = 20;
$numero2 = 20;
$numero3 = 20;
$numero4 = 20;

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);
echo "<br>";

/**
 * -1 si izquierda es menor
 * 0 Si es igual
 * 1 Si izquierda es mayor
 */

var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";

$nombreCLiente = "Campers Campuslands";

// Conocer extensión de ub string
echo strlen($nombreCLiente);
var_dump($nombreCLiente);

// Eliminar espacios en blanco
$text = trim($nombreCLiente);
echo strlen($text);

// Convertir a Mayuscula
echo strtoupper($nombreCLiente);

// Convertir en minuscula
echo strtolower($nombreCLiente);

$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

var_dump(strtolower($mail) === strtolower($mail1));
echo str_replace('Juan', 'J', $nombreCLiente);

// Revisar si existe un string o no;
echo strpos($nombreCLiente, 'Pedro');

$tipoCLiente = "Premium - Empresarial";
echo "<br>";

echo "El cliente " . $nombreCLiente . "es" . $tipoCLiente;

echo "El cliente {$nombreCLiente} es {$tipoCLiente}";