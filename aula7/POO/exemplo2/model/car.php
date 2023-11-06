<?php

//Criação de classe
class Car {
    //Atributo da classe (static)
    private static $number = 0;
    //Atributos do objeto
    private $id;
    private $chassis;
    private $brand;
    private $model;
    private $engine;
    private $year;

    //Métodos
    //__construct: usado para construir
    //um objeto já com valores nos atributros.
    //Chamado toda vez que se faz uso do
    //termo "new".
    public function __construct(
        //Parâmetros do método
        $c = null,
        $b = null,
        $m = null,
        $e = null,
        $y = null
    ) {
        //self: quando queremos referenciar
        //um atributo da classe (static)
        self::$number++;
        //this: quando queremos referenciar
        //um atributo do objeto
        $this->id = self::$number;
        $this->chassis = $c;
        $this->brand = $b;
        $this->model = $m;
        $this->engine = $e;
        $this->year = $y;
        echo "Novo carro criado!<br>";
    }

    //set: para guardar/ajustar valores nos atributos
    public function setChassis($c) {
        $this->chassis = $c;
    }

    public function setBrand($b) {
        $this->brand = $b;
    }
    
    public function setModel($m) {
        $this->model = $m;
    }

    public function setEngine($e) {
        $this->engine = $e;
    }
    
    public function setYear($y) {
        $this->year = $y;
    }

    //get: para pegar os valores dos atributos
    public function getChassis() {
        return $this->chassis;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getYear() {
        return $this->year;
    }

    //toString: método utilizado principalmente
    //para apresentar os atributos de um objeto.
    public function toString() {
        return "<hr>ID: ".$this->id.
                "<br>Chassi: ".$this->chassis.
                "<br>Marca: ".$this->brand.
                "<br>Modelo: ".$this->model.
                "<br>Motor: ".$this->engine.
                "<br>Ano: ".$this->year;
    }
}