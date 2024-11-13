<?php

class coordenador{
    public $nome = null;

    public $departamento = null;

    protected $salario = null;

    private $cpf = null;

    public function coordenar (){
        echo "$this->nome está coordenado";
    }

    public function planejarAulas (){
        echo "$this->nome esta planejando aulas";
    }

    public function auxiliarProfessores (){
        echo "$this->nome esta auxiliando os professores";
    }

    private function definirHoras (){
        echo "$this->nome esta definindo os horarios";
    }

    private function organizandoReunioes (){
        echo "$this->nome esta organizando as reunioes";
    }


}