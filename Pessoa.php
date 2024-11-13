<?php

require_once .(.'class_Pessoa.php');

$professor = new Pessoa ();
$professor->nome = "Pablo";
$professor->idade = 16;

echo $professor->nome;
echo "<hr>";
echo $professor->idade;
echo "<hr>";

$professor->caminhar();
echo "<hr>";
$professor->apresentar();
echo "<hr>";
$professor->falar();