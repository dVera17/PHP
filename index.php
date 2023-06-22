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

/**
 * todo ISSET Y EMPTY
 * ISSET es utilizado para verificar si una variable o dato existe en la ram, es decir, verifica si está definida y tiene un
 * valor diferente de NULL;
 * EMPTY es utilizado para verificar si dicha variable tiene un valor asignado; 
*/

$variablePrueba = 'Hola'; 
if(isset($variablePrueba)){
    echo 'La variable está definida y tiene un valor';
} else echo 'La variable no está definida o no tiene valor';

$variablePrueba2 = ''; 
if(empty($variablePrueba2)){
    echo 'La variable está vacia o no esta definida';
} else echo 'La variable tiene un valor';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Daniel', 'Santiago', 'David');
$clientes4 = [
    'nombre' => 'Juan',
    'saldo' => 200
];

/**
 * ! EMPTY revisa si el arreglo está vacio
*/

var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));
var_dump(empty($clientes4));

/**
 * ! ISSET - Revisamos si el arreglo está creado o una propiedad está definida
*/

var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
var_dump(isset($clientes4));

/**
 * ? Ordenar los elementos de un array
 * ! Sort - Es utilizado para ordenar los elementos de menor a mayor
 * ! rSort - Es utilizado para ordenar los elementos de mayor a menor
*/

$arrayNumerico = array(1,2,4,5,8,7,3,9);
sort(($arrayNumerico));
var_dump($arrayNumerico);
rsort(($arrayNumerico));
var_dump($arrayNumerico);

/**
 * todo Ordenar arreglo asociativo
 * 
*/

$clienteOrden = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($clienteOrden); // Ordena por valores (orden alfabetico)
arsort(($clienteOrden)); // Ordena por valores (z primero)
ksort($clienteOrden); // Ordena por llaves en orden alfabetico
krsort(($clienteOrden)); // Ordena por valores por orden alfabetico de la Z a la A
var_dump($clienteOrden);    

/**
 * todo ESTRUCTURAS DE CONTROL
 * Son herramientas utilizadas para controlar el orden de ejecucion de un programa.
 * las estructuras de control mas comunes en programación son: 
 *  IF - ELSE IF - ELSE
 *  WHILE - DO WHILE
 *  SWITCH CASE
 *  TRY CATCH
*/

/**
 * todo ESTRUCTURAS CONDICIONALES
 * Este tipo de estructuras permite que el programa pueda tomar desiciones basadas en si se cumpple
 * una desición o no
*/
/**
 * ! IF - ELSE IF - ELSE
*/

if(5 < 10){
    echo '5 es menor que 10';
} else if(12 > 10){
    echo '12 es mayor que 10'  ;
} else echo ' 10 es menor que 5';

/**
 * ! SWITCH - CASE
 * 
 * switch (expresion) {
        case valor1:
            // bloque de código si la expresión es igual a valor1
            break;
        case valor2:
            // bloque de código si la expresión es igual a valor2
            break;
        default:
            // bloque de código si la expresión no coincide con ninguno de los valores anteriores
            break;
    }
*/

$opcionSwitch = 'A';

switch($opcionSwitch) {
    case 'A':
        echo 'La opcion es la A';
        break;
    case 'B':
        echo 'La opcoin es la B';
        break;
    default:
        echo 'La opcion es ninguna de las anteriores';
        break;
}

/**
 * ? Estructuras repetitivas
*/

/**
 * todo BUCLE WHILE
 * 
 * Bucle while: permite repetir la ejecución de un bloque de código mientras se cumpla una condición.
 * 
 * while(condicion){
 *     Se ejecuta el codigo mientras que la condicion se cumpla
 * }
*/

/**
 * todo BUCLE DO WHILE
 * 
 * Bucle do-while: similar al bucle while, pero garantiza que el bloque de código
 * se ejecuta almenos una vez, independientemente de si se cumple o no la condición.
 * 
 * do{
 *     se ejecuta codigo almenos una vez
 * }while();
*/

/**
 * todo BUCLE FOR
 * 
 * Bucle for: permite repetir la ejecución de un bloque de código un número fijo de veces, 
 * controlando el número de iteraciones mediante un contador.
 * 
 * for($i = 0, i < 5, i++){
 * 
 * }
*/

/**
 * todo BUCLE FOREACH
*/

$cliente52 = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

foreach($cliente52 as $cliente){
    echo $cliente;
}

foreach($cliente as $key => $valor){
    echo $key . ' - ' . $valor;
}

/**
 * ? Funciones definidas por el usuario
*/

//declare(strict_types = 1);
function sumar(int $numero1 = 0, array $numero2): void{
    echo $numero1 + $numero2;
}

sumar(10, []);

/**
 * !Es de buena practica utilizar la palabra reservada void a aquellas funciones que no retorna 
 * ningun tipo de valor, esto facilita la labor de identificar cual funcion
 * me retorna y cual funcion no me retorna ningún valor
*/

/**
 * ? FUNCONIES QUE RETORNAN VALORES
*/

/**
 * Es importante tener en cuenta que para indicar el tipo de dato que va a retornar
 * la función se debe utilizar los dos puntos seguido de un signo de interrogacion y el tipo de dato
 * que la funcion debe retornar
*/

function usuarioAutenticado(bool $autenticado): ?string {
    return $autenticado ? 'El usuario está autenticado' : null;
}

$usuario = usuarioAutenticado(false);
echo $usuario;

/**
 * ? INCLUDE, REQUIRE, INCLUDE_ONCE, REQUIER_ONCE
*/

/**
 * ? INCLUDE E INCLUDE_ONCE
 * Permiten incluir un archivo PHP en el programa. La diferencia entre ellas es que 
 * include puede incluir el mismo archivo varias veces mientras que 
 * include_once asegura que el archivo solo se incluya en el programa solo una vez
*/

/**
 * ? REQUIRE Y REQUIRE_ONCE
 * Son similares a include e include_once, pero en caso de que el archivo no pueda ser
 * encontrado, se detendra la ejecucion del programa.
 * Al utilizar Require_once, se asegura que el archivo solo se incluya una vez en el programa
*/

/**
 * ?JSON_ENCODE Y JSON_DECODE
 * La función JSON_ENCODE() en PHP se utiliza para convertir una estructura de datos en PHP 
 * en una cadena JSON.
*/

$productos = [
    [
        'nombre' => 'balon',
        'precio' => 250000,
        'disponible' => true
    ],
    [
        'nombre' => 'gafas',
        'precio' => 50000,
        'disponible' => true
    ],
    [
        'nombre' => 'perfume',
        'precio' => 490000,
        'disponible' => false
    ]
];

/**
 * La funcion JSON_DECODE() en PHP se utiliza para convertir una cadena JSON en una estructura
 * de datos PHP. Esta función toma una cadena JSON y la convierte en un objeto, un array asociativo
 * o un valor escalar segun corresponda
*/

$json = "{'nombre': 'Jose manuel', 'edad': 18}";
$data = json_decode($json);
var_dump($data);

/**
 * ? POO
*/

/**
 * ? PRINCIPALES CONCEPTOS DE LA PROGRAMACION ORIENTADA A OBJETOS
 * Clase: Es una plantilla para la creación de objetos
 * Objeto: Es una instancia de una clase
 * Atributos: Son las propiedades o caracteristicas de un objeto
 * Métodos: Son las acciones o comportamientos que un objeto puede realizar
 * Encapsulación: Es el principio que establece que los atributos y metodos relacionados deben
 * agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz publica.
 * Esto se logra gracias a los niveles de acceso(Públio, privado, Protegido)
 * 
 * Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes.
 * La clase derivada utiliza como base la clase PADRE o SUPERCLASE.
 * La herencia permite la reutilizacion de codigo
 * 
 * Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de 
 * diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de 
 * diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas
*/

/**
 * ? Modificadeores de acceso en PHP
 * Public -> Son accesivles desde cualquier lugar
 * Private -> Solo son accesibles dentro de la misma clase en la que se definen
 * Protected -> Son accesibles dentro de la misma clase y desde las clases derivadas
*/

/**
 * ? Clases
*/

class persona {

    public function __construct(private string $nombre, protected int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
    private function saludar(){
        echo 'Hola, mi nombre es ' . $this->nombre;
    }
}

/**
 *  ? Instanciar CLASES
*/

$persona1 = new Persona('Marcos', 1);

/**
 * Acceder a la informacion de la instancia de la clase
*/

print_r($persona1->__get($name));
print_r($persona1->__get($edad));

/**
 * ? Metodos estaticos
*/

class Animal{
    private static $especie;
    public function __construct(public string $nombre)
    {
        $this->nombre = $nombre;
    }

    public static function saludar(){
        echo 'Soy de la especie -> ' . self::saludar();
    }
}

$animal1 = new Animal('Conejo');

print_r(Animal::saludar());
/**
 * ? HERENCIA 
 * La herencia en programación es un concepto que permite crear nuevas clases basadas en clases
 * existentes, aprovechando y extendiendo su funcionalidad. La clase existente se conoce como clase
 * base o clase padre, mientras que la nueva clase creada se llama clase derivada o clase hija.
*/

/**
 * Clase base / Clase padre: Es la clase original de la cual se deriva una nueva clase. Define los
 * atributos y métodos básicos que serán heredados por las clases derivadas.
 * 
 * Clase derivada / Clase hija: Es la nueva clase creada que se basa en la clase base. 
 * Hereda los atributos y métodos de la clase base y puede agregar nuevos atributos y métodos, así como
 * modificar o ampliar los existentes.
 * 
 * Herencia simple y herencia múltiple: La herencia simple se refiere a la relación en la que una
 * clase derivada hereda de una sola clase base. Por otro lado, la herencia múltiple se refiere a
 * la relación en la que una clase derivada hereda de múltiples clases base. No todos los lenguajes
 * de programación admiten la herencia múltiple.
 * 
 * Polimorfismo: El polimorfismo es la capacidad de un objeto de una clase derivada para ser
 * tratado como un objeto de su clase base. Esto permite utilizar una referencia de la clase base
 * para manipular objetos de diferentes clases derivadas sin tener que conocer la clase concreta
 * en tiempo de compilación.
*/

class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad){}
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte{
    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){}

    public function getTransmision(): string{
        return $this->transmision;
    }
}

$bici = new Bicicleta(2,1);

echo $bici->getInfo();
echo $bici->getRuedas();

$auto1 = new Automovil(4, 5, 'manual');

/**
 * ? Clases Abstractas
 * En PHP, una clase abstracta es una clase que no se puede instanciar directamente, sino que sirve
 * como una plantilla o base para otras clases. Se utiliza para definir la estructura común y los métodos
 * que deben implementar las clases hijas.
*/

/**
 * ! No es posible instanciar una clase abstracta
*/

abstract class Animal3{
    abstract public function hacerSonido();
}

class perro extends Animal3{
    public function __construct(){}
    public function hacerSonido()
    {
        return "GUAUUUU";
    }
}

class gato extends Animal3{
    public function __construct(){}
    public function hacerSonido()
    {
        return "MEAWWWW";
    }
}

$pluto = new Perro();
$garfield = new Gato();

echo $pluto->hacerSonido();
echo $garfield->hacerSonido();

/**
 * ! INTERFACES 
 * En la programación orientada a objetos, una interfaz es una estructura que define un conjunto de 
 * métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe proporcionar una clase sin especificar cómo se implementan esos métodos
*/

interface Figura{
    public function calcularArea();
}

class Circulo implements Figura{
    public function __construct(private float $radio)
    {
        
    }

    public function calcularArea()
    {
        return pi() * pow($this->radio, 2);
    }
}

$circulo = new Circulo(5);
echo $circulo->calcularArea();

/**
 * ! Herencia entre interfaces
 * En php es posible realizar herencia entre interfaces utilizando la palabra Extends
*/

interface Figura3D extends Figura{
    public function calcularVolumen();
}

class Cubo implements Figura3D{
    public function __construct(private float $lado){}

    public function calcularArea()
    {
        return 6 * pow($this->lado, 2);
    }

    public function calcularVolumen()
    {
        return pow($this->lado, 3);
    }
}

$cubo = new Cubo(5);
echo $cubo->calcularArea();
echo $cubo->calcularVolumen();

/**
 * ! Polimorfismo
 * El polimorfismo en la programación orientada a objetos es un concepto que permite tratar objetos
 *de diferentes clases de manera uniforme, utilizando una interfaz común. Se basa en la capacidad de
 * los objetos de una jerarquía de clases de responder de manera diferente a la misma llamada de
 * método.
*/

/**
 * El polimorfismo se utiliza para crear código más flexible y modular, ya que permite escribir código
 * que pueda manejar diferentes tipos de objetos de manera genérica sin preocuparse por los detalles
 * específicos de cada clase.
*/

interface TransporteInterfaz{
    public function getInfo() : string;
    public function getRuedas(): int;
}

class Trasnporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo(): string
    {
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' personas';
    }

    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Automovil2 extends Trasnporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo(): string
    {
        return 'El transporte AUTO tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' personas y es de color ' . 
        $this->color;
    }

    public function getRuedas(): int
    {
        return $this->ruedas;
    }

    public function getColor(): string{
        return $this->color;
    }
}

echo "<pre>";
var_dump($trasnporte = new Trasnporte(8, 20));
var_dump($auto3 = new Automovil2(4, 5, 'rojo'));

echo $trasnporte->getInfo();
echo "<br>";

echo $auto3->getInfo();
echo "<br>";

echo $auto3->getColor();
echo "<pre>";

/**
 * ! AUTOLOAD
 * En PHP, el autoloading (carga automática) es una técnica que permite cargar automáticamente las
 * clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto
 * del código. Esto facilita el desarrollo y el mantenimiento del código, ya que no es necesario
 * preocuparse por incluir los archivos de clase de forma explícita.
*/

/**
 * El autoloading en PHP se basa en la función spl_autoload_register(), que permite registrar una o
 * varias funciones de autoload. Estas funciones se ejecutan automáticamente cuando se intenta
 * utilizar una clase que aún no ha sido cargada
*/

function autoload($clase){
    require __DIR__ . '/scripts/' . $clase . '.php';
}

spl_autoload_register('autoload');

$clase = new Clase(2);

/**
 * ! NAMESPACE
 * En PHP, la palabra clave use se utiliza en la definición de espacios de nombres (namespace) para
 * importar clases, funciones y constantes desde otros espacios de nombres.
*/

// ? NAMESPACE APP

/**
 * ! IMPORTAR LOS NAMESPACE A LA CLASE
*/
use app\Prueba;
function my_autoload($clase){
    $fileclass = explode('\\', $clase);
    require __DIR__ . '/scripts/' . $fileclass[1] . '.php';
}

spl_autoload_register('my_autoload');

/**
 * ! Explicación
 * Este código PHP muestra un ejemplo de autoloading de clases utilizando el método
 * spl_autoload_register. Aquí hay una explicación línea por línea:
 * - La línea 1 y 2 utiliza use para importar las clases Clientes y Detalles del namespace App. Esto
 * permite utilizar esas clases en el código.
 * - La función my_autoload se define como una función de carga automática personalizada.
 * Recibe el nombre de la clase que se está intentando cargar.
 * - Dentro de la función my_autoload, se divide el nombre de la clase en partes utilizando el
 * carácter \ como separador. Esto se hace mediante la función explode.
 * - A continuación, se construye una ruta de archivo utilizando el directorio actual (__DIR__) y la
 * carpeta "clases". Se agrega el nombre de la clase obtenido anteriormente (la segunda parte
 * de $fileClass).
 * - Finalmente, se utiliza la instrucción require para incluir el archivo de clase correspondiente.
 * - La función spl_autoload_register se utiliza para registrar la función my_autoload como una
 * función de carga automática. Esto significa que cuando se intente utilizar una clase que no se
 * haya cargado previamente, PHP llamará a my_autoload para intentar cargarla.
 * - Se crean objetos de las clases Detalles y Clientes utilizando el operador new. Estos objetos
 * pueden utilizarse para acceder a los métodos y propiedades definidos en esas clases.
 */

 

