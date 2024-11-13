<?php

require_once .(.'Coordenador.php');

$professor = new Coordenador();
$professor->nome = "Saulo";
$professor->disciplina = "Coordenação";

echo $professor->nome;
echo "<hr>";
echo $professor->departamento;
echo "<hr>";

$professor->auxiliarProfessores();
echo "<hr>";
$professor->coordenar();
echo "<hr>";
$professor->planejarAulas();