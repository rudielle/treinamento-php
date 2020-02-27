<?php

$meta = 5000;
$aliqComissao = 0.03;

$totalVenda= 3000;
$haFaltas = false;

$comissao = 0;
if ($totalVenda >= $meta && !$haFaltas) {
    $comissao = $totalVenda * $aliqComissao;

}

echo $comissao . PHP_EOL;