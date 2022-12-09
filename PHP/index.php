<?php

require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");
require_once("uberVan.php");

$car1 = new uberX("CVB123", new Account("Andres Herrera", "wqs123"), "Chevrolet", "Spark");
$car1->setPassenger(4);
$car1->PrintDataCar();

$uberPool123 = new uberPool("QWE123", new Account("Andrea Medina", "POI123"), "Toyota", "Prius");
$uberPool123->PrintDataCar();

$uberVanPrueba = new UberVan("ARG123", new Account("Juan Camilo", "FGH345"), "Aceptado", "Piel");
$uberVanPrueba->setPassenger(6);
$uberVanPrueba->PrintDataCar();
?> 