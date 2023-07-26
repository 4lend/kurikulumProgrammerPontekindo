<?php

// 1.
echo "\n################################\n";
echo ucwords("\n:::::::: nomer 1 ::::::::\n\n");
$b = "bttry";
echo strtoupper("masukkan daya baterai : ");
$b .= trim(fgets(STDIN));
# echo $b. PHP_EOL;
$i = substr($b, 5, 2 );
echo strtoupper("sisa baterai hp anda sebanyak $i%") . PHP_EOL;
echo strtoupper("keterangan : ");
if($i < 20){
    echo ucwords("low HP"). PHP_EOL;
} elseif ($i < 40){
    echo ucwords("enough HP"). PHP_EOL;
} else {
    echo ucwords("good HP"). PHP_EOL;
}

echo "\n################################\n";

// 2.
// mengurutkan dari yang terkecil
echo ucfirst("\n:::::::: nomer 2 ::::::::\n");
$array = [5,26,79,4,63,22,17,9];
sort($array);
foreach ($array as $key => $value){
    # echo $value. PHP_EOL;
}
# 1$a = 4;
# 1if($a % 2 == 0){
# 1    echo $a;
# 1}
echo PHP_EOL;
// memisahkan data
echo "list angka genap : \n";
foreach($array as $value){
    if($value % 2 == 0){
        # var_dump($value). PHP_EOL;
        echo($value). PHP_EOL;
    } 
}
# var_dump("\n****");
echo("                \n");

echo "list angka ganjil : \n\n";
foreach($array as $value){
    if($value % 2 == 1){
        echo($value). PHP_EOL;
    }    
}

echo "\n################################\n";

// 3. 
echo ucfirst("\n:::::::: nomer 3 ::::::::\n\n");
$data = [
    "id" => 582,
    "nama" => "pisang",
    "warna" => "kuning",
    "stok" => "51",
];
$data["rasa"] = "manis";
foreach ($data as $key => $val){
    echo $key, " = ", $val. PHP_EOL;
}
// 4.
echo "\n#################\n\n";
unset ($data["warna"]);
foreach ($data as $key => $val){
    echo $key, " = ", $val. PHP_EOL;
}
// 5.
echo "\n#################\n\n";
# set($data["stok"]);
$data["stok"] = "32";
foreach ($data as $key => $val){
    echo $key, " = ", $val. PHP_EOL;
}
# echo "\n#################\n\n";
echo "\n################################\n";



?>