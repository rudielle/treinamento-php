<?php

$status = 'macarena';

if ($status == 'confirmado') {
    echo 'status confirmado';
}elseif ($status == 'pendente') {
        echo 'mdfe pendente';
}elseif ($status == 'finalizado') {
        echo 'mdfe entregue';
}elseif ($status == 'cancelado') {
        echo 'mdfe cancelado';
}else {
    echo 'nada passou';
}

echo PHP_EOL;