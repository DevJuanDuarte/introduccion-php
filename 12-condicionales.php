<?php  

$autenticado = true;
$admin = false;

if ($autenticado && $admin){
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no auteticado, iniciar sesión";
}

//IF ANIDADO
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br/>";
if ( !empty($cliente) ) {
    echo 'El  arreglo del cliente no está vacio';
    echo "<br/>";

    if ($cliente['saldo']>0){
        echo 'saldo de cliente disponible';
    } else {
        echo 'no hay saldo disponible';
    }
} 

echo "<br/>";

//ELSE IF
if ($cliente['saldo'] > 0 ) {
    echo 'El cliente tiene saldo';
} else if ($cliente['informacion']['tipo'] === 'Premium'){
    echo 'El cliente es premium';
} else {
    echo 'No hay cliente definido o no hay saldo o no es premium';
}

echo '<br/>';
//SWITCH
$tecnologia = 'HTML';

switch ($tecnologia){
    case 'PHP':
        echo 'PHP es un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'El lenguaje de la web';
        break;
    case 'HTML':
        echo 'Emmm';
        break;

    default:
        echo 'No se conoce el lenguaje';
        break;
}