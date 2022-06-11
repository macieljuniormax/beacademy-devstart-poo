<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$cliente1 = new Cliente('maciel@email.com', '123456');
$cliente1->setNome('Maciel');

$gestor1 = new Gestor('rodrigo@email.com', '123456');
$gestor1->setNome('Rodrigo');

var_dump($cliente1);
var_dump($gestor1);
