<?php

//Criando classe
class Country {
    //Atributo da classe (static)
    private static $num = 0;
    //Atributos dos objetos
    private $cod;
    private $name;
    private $continent;
    private $population;
    private $language;

    //Método construtor
    public function __construct(
        $n = null,
        $c = null,
        $p = null,
        $l = null
    ) {
        //Acessar atributo "static"
        self::$num++;
        $this->cod = self::$num;
        $this->name = $n;
        $this->continent = $c;
        $this->population = $p;
        $this->language = $l;
        echo "Novo objeto criado!<br>";
    }

    //Criando setters
    public function setName($n) {
        $this->name = $n;
    }

    public function setContinent($c) {
        $this->continent = $c;
    }

    public function setPopulation($p) {
        $this->population = $p;
    }

    public function setLanguage($l) {
        $this->language = $l;
    }

    //Criando getters
    public function getName() {
        return $this->name;
    }

    public function getContinent() {
        return $this->continent;
    }

    public function getPopulation() {
        return $this->population;
    }

    public function getLanguage() {
        return $this->language;
    }

    //toString
    public function toString() {
       return "<hr>País: ".$this->name.
              "<br>Continente: ".$this->continent.
              "<br>População: ".$this->population.
              "<br>Idioma: ".$this->language.
              "<br>Cod: ".$this->cod; 
    }
}