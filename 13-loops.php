<?php include 'includes/header.php';

//WHILE

$i = 0;// INICIALIZADOR

while($i < 10){

    echo $i . "<br />";

    $i++; //INCREMENTO
}

//do while
$i = 100;// INICIALIZADOR

do {
    echo $i . "<br />";

    $i++; //INCREMENTO

} while ($i < 10);

/**
 * Multiplos de 3 FIZZ
 * Multiplos de 5 BUZZ
 * Multiplos de 3 y 5 FIZZBUZZ
*/



// FOR LOOP

for ($i = 1; $i < 50; $i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo $i . " - FIZZBUZZ <br />";
    }
    else if($i % 3 === 0){
        echo $i . " - FIZZ <br />";
    }
    else if($i % 5 === 0){
        echo $i . " - BUZZ <br />";
    }else {
        echo $i . "<br />";
    }
    
}



//FOR EACH
/**$clientes = array ('Juan', 'David', 'Nicolle ');

foreach( $clientes as $cliente ):
    echo $cliente . "<br />";
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'premium'
];
foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . "<br />";
endforeach;*/


include 'includes/footer.php';