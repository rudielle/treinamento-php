<?php

$numero = 3;
$texto = '3';

// var_dump($numero);
// var_dump($texto);

// if ($numero !== $texto) {
//     echo 'operador diferente verdadeiro';
// }

if ( 3 > 5 ) {
    echo 'tem algo errado';
}

$estado = 'SP';
if ($estado == 'SP') {
    $imposto = 0.12;
}

$nome = 'Diego';
$valor = 0;
$lista = [];
$nada = null;

if ($nome) {
    echo 'Meu nome é: ' . $nome;
} else {
    echo 'ALERTA: nome não informado';
}



php -S localhost:8000