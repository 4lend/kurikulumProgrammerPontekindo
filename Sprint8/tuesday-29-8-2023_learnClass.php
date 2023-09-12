<?php 

#### CONTOH PALING SEDERHANA DARI PENGGUNAAN OOP PHP ####
    // public function speak() {
        // echo "Animal speaks!";
    // }
// }
// $animal = new Animal();
// $animal->speak(); // Output: "Animal speaks!"

class student {
    public function scream($default = "fulan"){
        echo "hello, ". $default;
    }
}
// ini membuat variable $anak yang berisi dari class student
// jadi nanti ketika variable anak dijalankan, maka akan menjalankan class student
$anak = new student();
// krn ini class maka kita perlu tanda -> ke nilai / value yang bisa kita isi
$anak-> scream("boedy");





// class Animal {
    // public $name;
// 
    // public function speak() {
        // echo "Animal speaks!";
    // }
// }
// 
// class Dog extends Animal {
    // public function speak() {
        // echo "Dog barks!";
    // }
// }
// 
// $dog = new Dog();
// $dog->speak(); // Output: "Dog barks!"

?>