<?php

class account {
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($n, $d){
        $this->name = $n;
        $this->document = $d;
    }
}
?>