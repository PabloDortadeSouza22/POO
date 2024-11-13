<?php

require_once .(.'class_Professor.php');

$professor = new Professor();
$professor->nome = "Teles";
$professor->disciplina = "Computador";

echo $professor->nome;
echo "<hr>";
echo $professor->disciplina;
echo "<hr>";

$professor->ensinar();
echo "<hr>";
$professor->corrigirProva();
echo "<hr>";
$professor->prepararAula();