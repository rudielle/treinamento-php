<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

const ALIQUOTA = 0.05;
$baseCalculo = 100;

$imposto = $baseCalculo * ALIQUOTA;
$preco_Total = $baseCalculo + $imposto;
//echo 'Total dos produtos: ' . $preco_Total;
?>
<span style="font-weight: 600"> Total do produto: </span> R$ <?php echo $preco_Total;?>
</body>
</html>