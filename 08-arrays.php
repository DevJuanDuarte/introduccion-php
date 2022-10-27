<?php include 'includes/header.php';

$carrito = ['Tablet', 'Celular', 'Computador'];


//UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

//ACCEDER A UN ELEM,ENTO DEL ARRAY
echo $carrito[2];

$carrito[3] = "MacBook";

echo "<pre>";
var_dump ($carrito);
echo "</pre>";



include 'includes/footer.php';