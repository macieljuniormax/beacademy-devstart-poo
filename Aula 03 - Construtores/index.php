<?php

include 'Produto.php';
include 'Categoria.php';

$categoria1 = new Categoria('Roupas', 'Roupas Unissex');
$categoria2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas de rosto');
$categoria3 = new Categoria('Calçados', 'Calçados em geral');

$produto1 = new Produto('Tenis de corrida', 299, $categoria3);
$produto2 = new Produto('Calça Jeans', 100, $categoria1);
$produto3 = new Produto('Saia Jeans', 50, $categoria1);

var_dump($produto1);
var_dump($produto2);
var_dump($produto3);
