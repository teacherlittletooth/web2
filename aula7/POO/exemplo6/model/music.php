<?php

//Criar a classe
class Music {
    //Atributo da classe (static)
    private static $num = 0;
    //Atributos dos objetos
    private $id;
    private $name;
    private $singer;
    private $album;
    private $time;

    //__construct: método invocado a cada
    //criação de objeto, que permite já
    //inserir dados na sua criação.
    public function __construct(
        $n = null,
        $s = null,
        $a = null,
        $t = null
    ) {
        //Acessar atributo static
        self::$num++;
        //Jogar o valor da variável $num
        //para o atributo id
        $this->id = self::$num;
        $this->name = $n;
        $this->singer = $s;
        $this->album = $a;
        $this->time = $t;
        echo "Novo objeto criado!<br>";
    }

    //set: função para "setar", salvar,
    //ajustar o valor de um atributo
    public function setName($n) {
        // $this: para acessar um atributo
        // do objeto
        $this->name = $n;
    }

    public function setSinger($s) {
        $this->singer = $s;
    }

    public function setAlbum($a) {
        $this->album = $a;
    }

    public function setTime($t) {
        $this->time = $t;
    }

    //get: serve para pegar o valor de
    //um atributo
    public function getName() {
        return $this->name;
    }

    public function getSinger() {
        return $this->singer;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function getTime() {
        return $this->time;
    }

    //toString: serve para criar uma
    //representação em formato string,
    //de um objeto
    public function toString() {
       return "<hr>Música: ".$this->name.
            "<br>Artista: ".$this->singer.
            "<br>Álbum: ".$this->album.
            "<br>Tempo: ".$this->time.
            "<br>ID: ".$this->id; 
    }
}