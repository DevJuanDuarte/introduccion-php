<?php include 'includes/header.php';

$clientes = [
    "Nombre" => "Juan",
    "Saldo" => 2000000,
    "Informacion" => [
        "Tipo" => "Premium",
        "Diponible" => 100
    ]
];
echo "<pre>";
var_dump ($clientes);
echo "</pre>";

echo "<pre>";
var_dump ($clientes["Informacion"]["Tipo"]);
echo "</pre>";

$clientes["Informacion"] = 1095946069;
echo "<pre>";
var_dump ($clientes);
echo "</pre>";


include 'includes/footer.php';