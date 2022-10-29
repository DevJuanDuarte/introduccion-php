<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 200,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

//CONVIERTE UN ARREGLO A STRING
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

//CONVIERTE UN STRING A UN ARREGLO
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';