
<?php

function tampil()
{
  // global 

}

$data = [216, 769, 512, 363, 121];
function tigaTertinggi(){
  rsort($data);
  // var_dump($data)
  $no = 1;
  foreach($data as $key => $value){
    if($key < 3){
      echo $value;
    }
  }
}

// 4.
echo "jumlah penduduk desa amegakure";
$penduduk = trim(fgets(STDIN));
$amegakure = function (){
  global $penduduk;
  if($penduduk >= 200){
    return "padat penduduk";
  } elseif($penduduk >= 100){
    return "cukup penduduk";
  } else{
    return "sedikit penduduk";
  }
};
echo "jumlah penduduk desa amegakure : $penduduk\n";
echo "keterangan : ";
echo $amegakure() . PHP_EOL;

?>
