<?php

class User {
    //Atributos
    private $userName;
    private $userPass;

    public function __construct($name, $pass) {
        $this->userName = $name;
        $this->userPass = $pass;
    }

    public function setUserName($param) {
        $this->userName = $param;
    }

    public function setUserPass($param) {
        $this->userPass = $param;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getUserPass() {
        return $this->userPass;
    }

    //Validação de login
    public function login() {
        return ($this->userName == "admin"
            && $this->userPass == "1234");
    }
}