<?php include 'includes/header.php';

$cliente = [];
$cliente2 = array();
$cliente3 = array('Juan', 'David' , 'Duarte');

$clientes = [
    'nombre' => 'Juan',
    'saldo' => 200
];

//EMPTY: REVISA SI UN ARREGLO ESTÁ VACIO
var_dump( empty($cliente) );
var_dump( empty($cliente3) );
var_dump( empty($cliente2) );

echo "<br/>";


//ISSET: REVISA SI UN ARREGLO ESTÁ CREADO O UNA PROPIEDAD ESTÁ DEFINIDA
var_dump( isset($cliente4) );
var_dump( isset($cliente) );
var_dump( isset($cliente2) );
var_dump( isset($cliente3) );


//ISSET: PERMITE REVISAR SI UNA PROPIEDAD DE UN ARREGLO ASOCIATIVO EXISTE
var_dump( isset($clientes['nombre']) );
var_dump( isset($clientes['codigo']) );
var_dump( isset($cliente3['2']) );







include 'includes/footer.php';