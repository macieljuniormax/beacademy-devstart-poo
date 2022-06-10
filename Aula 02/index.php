<?php

include 'Produto.php';

$produto1 = new Produto();
$produto1->alterarNome('Tenis de corrida');
$produto1->alterarValor(-299);

// $produto2 = new Produto();
// $produto2->nome = 'Calça Jeans';
// $produto2->valor = -100;


var_dump($produto1);
var_dump($produto2);
