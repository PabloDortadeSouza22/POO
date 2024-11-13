<?php

class Pessoa{

public $nome = null;

public $idade = null;

protected $cpf = null;

protected $endereco = null;

public function apresentar ():void{
    echo "$this->nome está apresentando";
}

public function caminhar ():void{
    echo "$this->nome esta caminhando";
}

public function falar():void{
    echo "$this->nome esta falando";
}

private function comer ():void{
    echo "$this->nome esta comendo";
}

private function dormir ():void{
    echo "$this->nome esta dormindo";
}

}