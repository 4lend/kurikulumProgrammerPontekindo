<?php 

// require_once "./main.php";
// // require_once "./Controller/ControllerA.php";
require_once __DIR__ . '/vendor/autoload.php';

// use Class; 

use ProgrammerZamanNow\Data\People;
$people = new People("Eko");
echo $people->showMessage("Budi"). PHP_EOL;
// echo $people->sayHello("Budi"). PHP_EOL;


?>