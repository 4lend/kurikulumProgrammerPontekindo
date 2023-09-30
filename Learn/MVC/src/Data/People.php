<?php 

namespace ProgrammerZamanNow\Data;

class People {

    public $message;
    public $pesan;

    public function __construct() {
        $this->message = "ini adalah ControllerA dari properties message";
        $this->pesan = "ini adalah ControllerA dari attributes pesan";
        // $this->message = $message;
        // $this->pesan = $pesan;
    }
// melankolis
    public function showMessage() {
        echo "<br>";
        echo $this->message;
        echo "<br>";
        echo "<br>";
        echo $this->pesan;
    }

    // public function __construct(private string $name) {
    // }
// 
    // public function sayHello(string $name){
        // echo "Hello $name, My name is $this-name";
    // }

}

?>