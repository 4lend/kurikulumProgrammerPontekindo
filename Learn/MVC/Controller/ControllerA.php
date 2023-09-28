<?php


class ControllerA {
    public $message;
    public $pesan;

    public function __construct() {
        $this->message = "ini adalah ControllerA";
        $this->pesan = "ini adalah ControllerA dari attributes pesan";
        // $this->message = $message;
        // $this->pesan = $pesan;
    }

    public function showMessage() {
        echo $this->message;
        echo "<br>";
        echo $this->pesan;
    }
}

$ControllerA = new ControllerA();
$ControllerA->showMessage();

?>