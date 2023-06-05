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
print_r(array_filter($array1, "par")) ;
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
echo 'si sabes Js sabes las estructuras de control y si no sabes, vuelve a Js';
echo '<hr>';
echo '<h1> Estructuras condicionales</h1>';
echo 'lo mismo de arriba ';
