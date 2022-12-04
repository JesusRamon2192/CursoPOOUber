<?php

require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");

$car1 = new uberX("CVB123", new Account("Andres Herrera", "wqs123"), "Chevrolet", "Spark");
$car1->PrintDataCar();

$uberPool123 = new uberPool("QWE123", new Account("Andrea Medina", "POI123"), "Toyota", "Prius");
$uberPool123->PrintDataCar();
?> 