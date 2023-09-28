<?php

// function autoloadFoo($class)
// {
    // $file = "Foo/{$class}.php";
    // if (is_readable($file)) {
        // require $file;
    // }
// }
// 
// function autoloadBar($class)
// {
    // $file = "Bar/{$class}.php";
    // if (is_readable($file)) {
        // require $file;
    // }
// }
// 
// spl_autoload_register("autoloadFoo");
// spl_autoload_register("autoloadBar");
// 
// $foo = new Foo();
// $foo->someFunction();
// 
// $bar = new Bar();
// $bar->anotherFunction();



spl_autoload_register(function($class) {
    // require_once "./Controller/". $class .".php";
    require_once './Controller/'. $class .'.php';
});

?>