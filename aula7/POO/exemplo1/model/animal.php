<?php

//Criação da classe
class Animal {
    //Atributos
    private static $number = 0; //Criando atributo estático
    private $id;
    private $name;
    private $nameCient;
    private $species;
    private $age;
    private $weight;

    public function __construct(
        $n = null,
        $nc = null,
        $s = null,
        $a = null,
        $w = null
    ) {
        //self, significa referenciar o
        //atributo da classe (static)
        self::$number++;
        //this, significa referenciar o
        //atributo do objeto
        $this->id = self::$number;
        $this->name = $n;
        $this->nameCient = $nc;
        $this->species = $s;
        $this->age = $a;
        $this->weight = $w;
        echo "Novo animal criado!<br>";
    }

    //set: métodos para gravar/salvar/ajustar
    public function setName($n) {
        $this->name = $n;
    }

    public function setNameCient($nc) {
        $this->nameCient = $nc;
    }

    public function setSpecies($s) {
        $this->species = $s;
    }

    public function setAge($a) {
        $this->age = $a;
    }

    public function setWeight($w) {
        $this->weight = $w;
    }

    //get: função para pegar/capturar
    public function getName() {
        return $this->name;
    }

    public function getNameCient() {
        return $this->nameCient;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getAge() {
        return $this->age;
    }

    public function getWeight() {
        return $this->weight;
    }

    //toString: método para mostrar em formato string
    //os valores dos atributos de determinado objeto
    public function toString() {
        return "<hr>ID = ".$this->id.
                "<br>Nome = ".$this->name.
                "<br>Nome científico = ".$this->nameCient.
                "<br>Espécie = ".$this->species.
                "<br>Idade = ".$this->age.
                "<br>Peso = ".$this->weight;
    }
}