<?php

require_once 'account.php';
class Car {
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($l, $d) {
        $this->license = $l;
        $this->driver = $d;
    }

    public function PrintDataCar(){
        echo '<p>License: ' . $this->license . '</p>';
        echo '<p>Driver Name: ' . $this->driver->name . '</p>';
        echo '<p>Driver Document: ' . $this->driver->document . '</p>';
    }
}

?>