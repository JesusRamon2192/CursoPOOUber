<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $material;

    public function __construct ($l, $d, $tCA, $m) {
        parent::__construct($l, $d);
        $this->typeCarAccepted = $tCA;
        $this->material = $m;
    }
}
?>