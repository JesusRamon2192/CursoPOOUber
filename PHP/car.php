<?php

require_once 'account.php';
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passengers;

    public function __construct($l, $d) {
        $this->license = $l;
        $this->driver = $d;
    }

    public function getPassenger(){
        return $this->passengers;
    }

    public function setPassenger($p){

        if ($p == 4){
            $this->passengers = $p;
        } 
        else {
            echo "Necesistas asignar 4 pasajeros";
        }
    }

    public function PrintDataCar(){
        echo '<p>License: ' . $this->license . '</p>';
        echo '<p>Driver Name: ' . $this->driver->name . '</p>';
        echo '<p>Driver Document: ' . $this->driver->document . '</p>';
        echo '<p>Passengers: ' . $this->passengers . '</p>';
    }
}

?>