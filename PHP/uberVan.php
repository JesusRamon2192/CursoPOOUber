<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $material;
    protected $passengers;

    public function __construct ($l, $d, $tCA, $m) {
        parent::__construct($l, $d);
        $this->typeCarAccepted = $tCA;
        $this->material = $m;
    }

    public function setPassenger($p){
        if($p == 6){
            $this->passengers = $p;
        } else {
            echo "Necesitas asignar 6 pasajeros";
        }
    }

    public function PrintDataCar(){
        echo '<p>License: ' . $this->license . '</p>';
        echo '<p>Driver Name: ' . $this->driver->name . '</p>';
        echo '<p>Passengers: ' . $this->passengers . '</p>';
        echo "<p>Material: " . $this->material . '<p>';
    }
}
?>