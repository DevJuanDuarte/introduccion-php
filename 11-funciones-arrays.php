<?php include 'includes/header.php';

$carrito = ['Tablet','Computador','Televisor'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Computador', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,3,4,6,7,9,);
sort($numeros);//ORDENAR DE MENOR A MAYOR
rsort($numeros);//DE MAYOR A MENOR

echo "<pre>";
var_dump ($numeros);
echo "</pre>";


//ORDENAR ARREGLO ASOCIATIVO
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump ($cliente);
echo "</pre>";

asort($cliente);//ORDENA POR VALORES - ORDEN ALFABETICO
arsort($cliente);//ORDENA POR VALORES - Z A LA A
ksort($cliente);//ORDENA POR LLAVES (ORDEN ALFABETICO)
krsort($cliente);//ORDENA POR LLAVES (DE LA Z A LA A)


echo "<pre>";
var_dump ($cliente);
echo "</pre>";



include 'includes/footer.php';