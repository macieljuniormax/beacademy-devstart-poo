<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$cliente1 = new Cliente();
$cliente1->setNome('Maciel');

$gestor1 = new Gestor();
$gestor1->setNome('Rodrigo');

var_dump($cliente1);
var_dump($gestor1);
