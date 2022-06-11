<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$cliente1 = new Cliente('maciel@email.com', '123456');
$cliente1->setNome('Maciel');

$cpf = "123456789";
Validar::validarCpf($cpf);

$gestor1 = new Gestor('rodrigo@email.com', '123456', 5000);
$gestor1->setNome('Rodrigo');

$gestorGeral1 = new GestorGeral('marial@email.com', '123456', 7000);

var_dump($cliente1);
var_dump($gestor1);
var_dump($gestorGeral1);
