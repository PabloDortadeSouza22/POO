<?php

class Professor{

    public $nome = null;

    public $disciplina = null;

    protected $salario = null;

    private $cpf = null;

    public function ensinar (){
        echo "$this->nome está ensinando $this->disciplina";
    }

    public function corrigirProva (){
        echo "$this->nome esta corrigindo prova";
    }

    public function prepararAula (){
        echo "$this->nome esta preparando aulas";
    }

    private function fazerChamada (){
        echo "$this->nome esta fazendo a chamada";
    }

    private function corrigirTarefa (){
        echo "$this->nome esta corrigindo as tarefas";
    }


}