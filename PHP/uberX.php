<?php
require_once('car.php');
class Uberx extends Car {
    public $brand;
    public $model;

    public function __construct($l, $d, $b, $m) {
        parent::__construct($l, $d);
        $this->brand = $b;
        $this->model = $m;
    }

    public function PrintDataCar(){
        echo '<p>License: ' . $this->license . '</p>';
        echo '<p>Driver Name: ' . $this->driver->name . '</p>';
        echo '<p>Passengers: ' . $this->brand . '</p>';
        echo "<p>Material: " . $this->model . '<p>';
    }
}
?>