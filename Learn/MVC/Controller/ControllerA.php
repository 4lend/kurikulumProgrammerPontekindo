<?php
namespace Controller;

class ControllerA {
    public $message;
    public $pesan;

    public function __construct() {
        $this->message = "ini adalah ControllerA dari properties message";
        $this->pesan = "ini adalah ControllerA dari attributes pesan";
        // $this->message = $message;
        // $this->pesan = $pesan;
    }

    public function showMessage() {
        echo "<br>";
        echo $this->message;
        echo "<br>";
        echo "<br>";
        echo $this->pesan;
    }
}

$ControllerA = new ControllerA();
$ControllerA->showMessage();

?>