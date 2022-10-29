<?php include 'includes/header.php';

$carrito = ['Tablet', 'Celular', 'Computador'];


//UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

//ACCEDER A UN ELEM,ENTO DEL ARRAY
echo $carrito[2];

//AÑADE UN ELEMENTO NUEVO AL ARRAY
$carrito[3] = "MacBook";

//AÑADIR UN ELEMENTO NUEVO AL FINAL CON FUNCION
array_push($carrito,'Audifonos');

//AÑADIR AL INICIO CON FUNCION
array_unshift($carrito,"SmarthWatch");

//UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

//LLAMAR CON ARRAY
$clientes = array('Juan', 'Pedro', 'Jose');

//UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
echo "<pre>";
var_dump ($clientes);
echo "</pre>";

echo $clientes[0];
include 'includes/footer.php';