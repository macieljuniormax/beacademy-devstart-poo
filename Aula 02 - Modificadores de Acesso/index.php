<?php

include 'Produto.php';

$produto1 = new Produto();
$produto1->setNome('Tenis de corrida');
$produto1->setValor(299);

$produto2 = new Produto();
$produto2->setNome('Calça Jeans');
$produto2->setValor(100);


var_dump($produto1);
var_dump($produto2);
