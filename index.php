<?php
header('Content-Type: application/json');
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

/**
 * todo: Array indexado
 * Tiene indices númericos
 * @var array $nombres
 */
$nombres = array('Juan', 'Pedro', 'Santiago');

/**
 * todo: Array indexado
 * Array de objetos
 * @var array $edades
 */
$edades = array(
    'Juan'=>35,
    'Pedro'=>52,
    'Santiago'=>20
);
print_r($edades);

/**
 * todo: Array indexado
 * Contiene uno o mas array en sí
 * @var array $personas
 */
$personas = array(
    'Juan' => array('edad' => 35, 'ciudad' => 'maracaibo'),
    'Pedro' => array('edad' => 52, 'ciudad' => 'Medellin'),
    'Santiago' => array('edad' => 20, 'ciudad' => 'Bogota')
);

print_r($personas);

print_r($personas['Pedro']['ciudad']);

/**
 * ? Ejemplo de como acceder y modificar un valor de el array
 */
$personas['Juan']['edad'] = 25;
print_r($personas);

/**
 * ? Ejemplo de como insertar un dato nuevo al array multidimensional
 */
$personas['martin']['edad'] = 25;
print_r($personas);

/**
 * todo Metodos mas utilizados en php
*/

/**
* ? array_flip()
* Devuelve un array volteado, es decir, las keys se convierten en values y viceversa
*/

$colores = array(
  'color1' => 'blanco',
  'color2' => 'negro'
);

echo 'Sin aplicar el metodo ';
print_r($colores);

echo 'APLICANDO el metodo array_flip() ';
print_r(array_flip($colores));

/**
* ? array_fill()
* rellena un array con un valor indicado
*/

$a = array_fill(0, 3, 'Santiago');
echo 'APLICANDO el metodo array_fill() ';
print_r($a);

/**
* ? array_filter()
* Filtra los elementos de un array utilizando un callback
*/

function test_odd($var){
    return($var & 1);
}

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));

/**
* ? array_map()
* Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados
*/

function calcularAreaCuadrado($n){
    return($n * $n);
}

$a = array(1, 2, 3);
$b = array_map("calcularAreaCuadrado", $a);
print_r('Aplicando el metodo ARRAY:MAP()');
print_r($b);

/**
* ? array_reduce()
* Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados
*/

function suma($carry, $item)
{
    $carry += $item;
    return $carry;
}

function producto($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "suma")); // int(15)
var_dump(array_reduce($a, "producto", 10)); // int(1200), ya que: 10*1*2*3*4*5
var_dump(array_reduce($x, "suma", "No hay datos a reducir"));

/**
* ? array_key_exists()
* Comprueba si una key existe en un array.
*/

$estudiante = array('david' => 20, 'marcos' => 24, 'santiago' => 18);
print_r('Aplicacion del metodo array_key_exists() -> ');
print_r(array_key_exists('marcos', $estudiante));

/**
* ? in_array()
* Comprueba si un value existe en un array.
*/

$estudiante = array('david' => 20, 'marcos' => 24, 'santiago' => 18);
print_r(' Aplicacion del metodo in_array() -> ');
print_r(in_array(20, $estudiante));

/**
* ? array_rand()
* Devuelve una o varias claves aleatorias de un array.
*/

print_r(' Aplicacion del metodo array_rand() -> ');
print_r(array_rand($estudiante, 2));

/**
* ? array_unique()
* Elimina los valores duplicados de un array.
*/

$grupoFrutas = array('grupo1' => 'pera', 'manzana', 'grupo2' => 'banano', 'pera');
print_r('Aplicacion de el metodo array_unique()');
print_r(array_unique($grupoFrutas));

/**
* ? array_intersect()
* Devuelve un array con los valores comunes a todos los arrays dados, las claves se mantienen
*/

print_r('APLICACION DEL METODO array_intersect()');
$grupo1 = array('a' => 'pera', 'manzana');
$grupo2 = array('b' => 'banano', 'pera');
print_r($grupo1);
print_r($grupo2);
print_r('APLICACION DEL METODO array_intersect()');
print_r(array_intersect($grupo1, $grupo2));

/**
* ? array_diff()
* Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
*/

print_r('APLICACION DEL METODO array_diff()');
print_r(array_diff($grupo1, $grupo2));

/**
* ? array_push()
* Agrega uno o más elementos al final de un array.
*/

print_r('APLICACION DEL METODO array_push()');
print_r(array_push($grupo1, 'piña'));
print_r($grupo1);

/**
* ? array_pop()
* Elimina el ultimo elemento de un array;
*/
print_r('APLICACION DEL METODO array_pop()');
print_r(array_pop($grupo1));
print_r($grupo1);

/**
* ? array_reverse()
* Revierte el orden de los elementos en un array.
*/

$muestra1 = array('arroz', 'papa', 'patacon');
$aplicandoReverse = array_reverse($muestra1);
print_r($muestra1);
print_r('APLICANDO EL METODO array_reverse()');
print_r($aplicandoReverse);

/**
* ? array_sum()
* Devuelve la suma de todos los valores de un array numérico.
*/

$numeros = array(1, 2, 3, 4, 5);
print_r($numeros);
print_r('APLICANDO EL METODO array_sum()');
print_r(array_sum($numeros));

/**
* ? array_product()
* Devuelve el producto de todos los valores de un array numérico.
*/

print_r('APLICANDO EL METODO array_product()');
print_r(array_product($numeros));

/**
* ? array_chunk()
* Divide un array en fragmentos más pequeños.
*/
print_r($numeros);
print_r('APLICANDO EL METODO array_chunk()');
print_r(array_chunk($numeros, 2));

/**
* ? array_keys()
* Devuelve todas las claves de un array.
*/

print_r('APLICANDO EL METODO array_keys()');
print_r(array_keys($numeros));

/**
* ? array_values()
* Devuelve todos los valores de un array.
*/

print_r('APLICANDO EL METODO array_values()');
print_r(array_values($numeros));

/**
* ? array_walk()
* Aplica una función de devolución de llamada a cada elemento de un array.
*/

function myfunction(&$value,$key){
    $value="yellow";
}

$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
print_r($a);

?>