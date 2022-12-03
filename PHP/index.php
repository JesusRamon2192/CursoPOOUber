<?php

require_once 'account.php';
require_once 'car.php' ;

$car1 = new Car("AW456", new Account("AndresHerrera", "AMS"));
$car1->PrintDataCar();

$car2 = new Car("WAS123", new Account("Andrea Herrera", "MKS123"));
$car2->PrintDataCar();

?>