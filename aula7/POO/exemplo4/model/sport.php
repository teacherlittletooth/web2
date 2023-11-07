<?php

//Criando classe
class Sport {
    //Atributo da classe
    private static $number = 0;
    //Atributos dos objetos
    private $cod;
    private $name;
    private $isSingle;
    private $numberOfPlayers;
    private $origin;

    //Métodos
    //__construct: Serve para construirmos
    //objetos com valores inicializados.
    public function __construct(
        $n = null,
        $i = null,
        $nop = null,
        $o = null
    ) {
        // self: referencia um atributo da classe
        self::$number++;
        // $this: serve para referenciar
        // um atributo do objeto
        $this->cod = self::$number;
        $this->name = $n; 
        $this->isSingle = $i;
        $this->numberOfPlayers = $nop;
        $this->origin = $o;
        echo "Novo esporte criado!<br>";
    }

    //set: função para "setar"/inserir/ajustar
    //o valor de um atributo
    public function setName($n) {
        $this->name = $n;
    }

    public function setIsSingle($i) {
        $this->isSingle = $i;
    }

    public function setNumberOfPlayers($nop) {
        $this->numberOfPlayers = $nop;
    }

    public function setOrigin($o) {
        $this->origin = $o;
    }

    //get: serve para pegar os atributos de
    //um objeto
    public function getName() {
        return $this->name;
    }

    public function getIsSingle() {
        return $this->isSingle;
    }

    public function getNumberOfPlayers() {
        return $this->numberOfPlayers;
    }

    public function getOrigin() {
        return $this->origin;
    }

    //toString: método que representa,
    //em formato String, um objeto
    public function toString() {
        return "<hr>Esporte: ".$this->name.
               "<br>Individual: ".(($this->isSingle) ? "Sim" : "Não").
               "<br>Número de jogadores: ".
               $this->numberOfPlayers.
               "<br>Origem: ".$this->origin.
               "<br>Cod: ".$this->cod;
    }
}