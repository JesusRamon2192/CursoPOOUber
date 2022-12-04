<?php
require_once('car.php');
class UberPool extends Car {
    public $brand;
    public $model;

    public function __construct($l, $d, $b, $m) {
        parent::__construct($l, $d);
        $this->brand = $b;
        $this->model = $m;
    }
}
?>