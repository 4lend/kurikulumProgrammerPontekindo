<?php 

# encapsulation

include_once "./cnt.php";

class Products extends Connection {
    // var by default access level nya public / bisa diakses dari mana saja
    var $satu;
    // public -> class=Y, subclass=Y, world=Y
    public $dua;
    // protected  -> class=Y, subclass=Y, world=N
    protected $tiga;
    
    private string $name;

    public function getName():string {
        return $this->$name;
    }

    public function setName(string $name):void{
        if(trim($this->($name) != "");{
            $this->name
        }
    }
}

$oreo = new Products();
$oreo->satu = "satu";
$oreo->dua = "dua";
echo $oreo->satu;
echo $oreo->dua;

### ini adalah kode dari PPT Pak Eko ###
// class Category
// 
// il
// 
// private string $name;
// private bool $expensive;
// 
// public function getName(): string
// {
// return $this->name;
// 
// +
// 
// public function setName(string $name):
// 
// {
// $this->name = $name;
// 
// +
// 
// void
### ini adalah kode dari PPT Pak Eko ###

?>