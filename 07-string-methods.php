<?php include 'includes/header.php';

$nombre_cliente = "Juan David";

//CONOCER LA EXTENSION DE UN STRING
echo strlen($nombre_cliente);
var_dump($nombre_cliente);

//ELIMINAR ESPACIOS EN BLANCO
$texto = trim($nombre_cliente);
echo strlen($texto);

//CONVERTIR A MAYUSCULAS
echo strtoupper($nombre_cliente);

//CONVERTIR A MINUSCULAS
echo strtolower($nombre_cliente);

$mail1 = "juan@juan.com";
$mail2 = "Juan@juan.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Juan', 'J', $nombre_cliente);

//REVISAR SI UN STRING EXISTE O NO
echo strpos($nombre_cliente, 'Juan');

$tipo_cliente = "Premium";

echo "</br>";

echo "El cliente {$nombre_cliente} es {$tipo_cliente}";




include 'includes/footer.php';