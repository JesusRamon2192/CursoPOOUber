<?php
class Uberx extends Car {
    public $brand;
    public $model;

    public function __construct($l, $d, $b, $m) {
        parent::__construct($l, $d);
        $this->brand = $b;
        $this->model = $m;
    }
}
?>