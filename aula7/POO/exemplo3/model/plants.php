<?php

//Criação da classe
class Plants {
    //Atributo da classe
    private static $number = 0;
    //Atributos do objeto
    private $id;
    private $species;
    private $weather;
    private $isEdible;
    private $color;

    //Métodos
    //__construct: serve para criar objetos
    //não nulos, ou seja, com dados existentes
    public function __construct(
        $s = null,
        $w = null,
        $i = false,
        $c = null
    ) {
        //self: serve para acessarmos os
        //atributos da classe (static)
        self::$number++;
        //this: serve para acessarmos os
        //atributos do objeto
        $this->id = self::$number;
        $this->species = $s;
        $this->weather = $w;
        $this->isEdible = $i;
        $this->color = $c;
        echo "Nova planta criada!<br>";
    }

    //set: função para "setar"/inserir/ajustar
    //o valor de um atributo
    public function setSpecies($s) {
        $this->species = $s;
    }

    public function setWeather($w) {
        $this->weather = $w;
    }

    public function setIsEdible($i) {
        $this->isEdible = $i;
    }

    public function setColor($c) {
        $this->color = $c;
    }

    //get: serve para pegar o valor de um atributo
    public function getSpecies() {
        return $this->species;
    }

    public function getWeather() {
        return $this->weather;
    }

    public function getIsEdible() {
        return $this->isEdible;
    }

    public function getColor() {
        return $this->color;
    }

    //toString: server para representar, em
    //formato string, um objeto
    public function toString() {
        return "<hr>ID: ".$this->id.
                "<br>Espécie: ".$this->species.
                "<br>Clima: ".$this->weather.
                "<br>Comestível? ".(($this->isEdible) ? "Sim" : "Não").
                "<br>Cor: ".$this->color;
    }
}