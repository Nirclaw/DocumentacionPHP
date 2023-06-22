<?php
// array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
// array_key_exists(): Comprueba si una clave existe en un array.
// in_array(): Comprueba si un valor existe en un array.
// array_rand(): Devuelve una o varias claves aleatorias de un array.
// array_unique(): Elimina los valores duplicados de un array.
// array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
// array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
// array_push(): Agrega uno o más elementos al final de un array.
// array_pop(): Extrae y elimina el último elemento de un array.
// array_reverse(): Revierte el orden de los elementos en un array.
// array_sum(): Devuelve la suma de todos los valores de un array numérico.
// array_product(): Devuelve el producto de todos los valores de un array numérico.
// array_chunk(): Divide un array en fragmentos más pequeños.
// array_keys(): Devuelve todas las claves de un array.
// array_values(): Devuelve todos los valores de un array.
// array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.  


/**
 * * Array_flip() => Transforma los valores en las Key y las key se convierte en los valores
 */

$ejemploFlip = array('nombre' => 'Nicolas', 'edad' => 23);
echo '<h1>Array_flip()</h1>';
echo '<p2> Transforma los valores en las Key y las key se convierte en los valores</p>';
var_dump(array_flip($ejemploFlip));
echo '<hr>';


/**
 * *array_fill()=> Crea un array con una variable, el primer argumento de es desde que numero desea iniciar , el sgundo argumento indica la cantidad y el tercer argumento es para indicar con que lo va llenar 
 */
echo '<h1>array_fill()</h1>';
echo '<p>Crea un array con una variable, el primer argumento de es desde que numero desea iniciar , el sgundo argumento indica la cantidad y el tercer argumento es para indicar con que lo va llenar </p>';
$ejemploFill = 'perro';
print_r(array_fill(0, 10, $ejemploFill));
echo '<hr>';

/**
 * * array_filter() => Se utiliza para devolver los datos de un array en especifico.
 */

echo '<h1>array_filter()</h1>';
echo '<p>Se utiliza para devolver los datos de un array en especifico.</p>';
function impar($numero)
{
    return $numero & 1;
}
function mayor($numero)
{
    return $numero > 10;
}

function menor($numero)
{
    return $numero < 10;
}

function par($numero)
{
    return !($numero & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

print_r($array1);
print_r(array_filter($array1, "par"));
print_r(array_filter($array2, "mayor"));
print_r(array_filter($array2, "menor"));
echo '<hr>';
/**
 * *array_map() => realiza operaciones con cada elemento del array, el primer argumento es la funcion ('lo que quiere que realice') y el segundo argumento es el array
 */
echo '<h1>array_map()</h1>';
function doble($n)
{
    return ($n * $n);
}


$a = array(1, 2, 3, 4, 5);
var_dump(array_map("doble", $a));
echo '<hr>';
/**
 * * array_reduce() =>
 */
echo '<h1> array_reduce() </h1>';

function suma($acumulador, $numero)
{
    $acumulador += $numero;
    return $acumulador;
}


$ejemploSuma = array(1, 2, 3, 4, 5, 6);
var_dump($ejemploSuma);

echo '<hr>';
echo '<h1>isset() & empty() </h1>';

/**
 * *isset() => la funcion valida si la variable existe y si estiene un valor //si es existe y tiene valor dara un true , de lo contrario dara false         
 * *empty() => La funcion valida si la variable existe y si esta sin definir // si existe y esta sin definir dara un true, de lo contrario dara un false 
 */

$nombre = ["nombre"];
var_dump(isset($nombre['nombre']));
var_dump(empty($nombre['nombre']));
echo '<hr>';

/**
 * *En PHP es un lenguaje de Programacion muy versatil, existen funciones para manipulacion de datos que se encuentra en arreglos
 * *estan los mas usados como:
 * ! sort()     => ordena los numeros de menor a mayor (para valores de numero)
 * ! rsort()    => ordena los numero de mayor a menor (pra valores de numeros)
 * ! asort()    => ordena los valores en orden alfabetico 
 * ! arsort()   => ordena los valores desde la Z-A 
 * ! ksort()    => ordena por las lalves en orden alfabetico A-Z
 * ! kasort()   => ordena las llaves desde la Z-A
 */

echo '<h1>sort() rsort() asort() arsort()ksort() kasort() </h1>';
$frutas = array("naranja", "manzana", "plátano", "uva", "mango");
sort($frutas);
print_r($frutas);
echo '<hr>';
echo '<h1>Estructuras de control </h1>';
/**
 * *Estructuras de control (omitimos esto porque esperamos que ya sepas js entonces es lo mismo)
 */
echo 'si sabes Js sabes las estructuras de control al igual las repetitivas y si no sabes, vuelve a Js';
echo '<hr>';
echo '<h1> Estructuras condicionales</h1>';
echo 'lo mismo de arriba ';

echo '<hr>';
echo '<h1> Funciones definidas por el usuario</h1>';


/**
 * *Funciones definidas por el usuario
 * 
 * !Funciones en PHP
 */

function NombreDeLaFuncion()
{
    /** *se coloca la palabra recervada "funtion" y siguiente el nombre de la funcion y para finalizar unos parentecis
                                 dentro de los parentecis agregaras los argumentos que necesites para usar la funcion en este caso no tiene argumentos  */
    echo 'hola mundo';
}

NombreDeLaFuncion();
/** * *para instanciar la funcion solo basta con llamar la funcion por su nombre y ya estara ejecutando la funcion*/

echo '<hr>';
echo '<h1>  include, require, include_once, require_once</h1>';

/***
 * * En PHP, include, require, include_once y require_once son funciones que se utilizan para incluir archivos externos en un programa. include y include_once permiten incluir un archivo PHP en el programa. La diferencia entre ellas es
 * * que include puede incluir el mismo archivo varias veces mientras que include_once asegura que el
 * * archivo solo se incluya una vez en el programa.
 *  */


echo '<hr>';
echo '<h1> . Json_encode y json_decode</h1>';

/**
 * *La función json_encode() en PHP se utiliza para convertir una estructura de datos en PHP en una cadena JSON. 
 */

$productos = [[
    'Nombre' => 123,
    'casa' => 'vaca',
    'falto' => true
]];



$jsonCodificado = json_encode($productos, JSON_UNESCAPED_UNICODE);
/** en este punto estamos usando la funcion de codificar un objeto en json */

$jsonDescodificado = json_decode($jsonCodificado, true);
/** y en este punto estamos usando el json_decode para tranformar el json en un array asosiativo**/


echo '<hr>';
echo '<h1> Programación Orientada a objetos </h1>';




/**
 *  Programación Orientada a objetos 
 * *La programación orientada a objetos (POO) es un paradigma de programación que se basa en el
 * *concepto de "objetos". Los objetos son entidades que representan conceptos del mundo real y que
 * *pueden tener propiedades (atributos) y realizar acciones (métodos).
 * 
 * *principales conceptos son 
 * ! Clase: Es una plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella.
 * 
 * ! Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos.
 * 
 * !  Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.
 * 
 * ! Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
 * 
 *! Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública. Esto se logra mediante la especificación de niveles de acceso (público, privado, protegido) para los atributos y métodos.

 *! Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se deriva se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la creación de jerarquías de clases.

 *! Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.
 */



echo '<hr>';
echo '<h1> Modificadores de acceso en PHP</h1>';

/**
 * * Modificadores de acceso en PHP
 * *Los modificadores de acceso son palabras clave utilizadas en la programación orientada a objetos para controlar la visibilidad y el acceso a los miembros (atributos y métodos) de una clase.
 * *
 * 
 * 
 * ! public: Los miembros declarados como public son accesibles desde cualquier lugar, ya sea desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. Son visibles para todos.
 * 
 * ! private: Los miembros declarados como private solo son accesibles desde dentro de la misma clase en la que se definen. No pueden ser accedidos desde fuera de la clase, ni siquiera por las clases heredadas.

 * ! protected: Los miembros declarados como protected son accesibles desde dentro de la misma clase y desde las clases heredadas (subclases). Sin embargo, no pueden ser accedidos desde fuera de la clase directamente.
 */

echo '<hr>';
echo '<h1> Clases</h1>';

/**
 * !Clases
 * *Como vemos en el apartado introductorio a la programación orientada a objetos una clase es una
 * *plantilla que nos permite definir las características y comportamientos de los objetos que se pueden
 * *crear a partir de dicha clase a continuación veremos un ejercicio en el cual se evidencia como crear
 * *una clase y como instancia de una clase en PHP.
 * 
 */


echo '<hr>';
echo '<h1> . Métodos estáticos</h1>';

/**
 * * En programación, un método estático es un método que pertenece a la clase en sí y no a una
 * * instancia específica de la clase. A diferencia de los métodos de instancia, los métodos estáticos se
 * * pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma.
 */
