<?php
include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$aluno1 = new Aluno();
$aluno1 -> nome = 'Maciel';
$aluno1 -> cpf = '123.456.789-10';

$cursoPHP = new Curso();
$cursoPHP -> nome = 'Introdução ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o Básico e Intermediário de PHP';

echo "<h1>Aluno: {$aluno1 -> nome}</h1>";

