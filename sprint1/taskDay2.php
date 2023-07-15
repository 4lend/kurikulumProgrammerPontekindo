<?php 

echo "############### PERSEGI PANJANG ###############"
echo "========== menghitung luas persegi panjang ==========\n";
echo "========== masukkan panjang persegi panjang ==========\n";
$panjang = trim(fgets(STDIN));
echo "========== masukkan lebar persegi panjang ==========\n";
$lebar = trim(fgets(STDIN));
$luasPersegiPanjang = $panjang * $lebar;
echo "luas persegi panjang adalah $luasPersegiPanjang \n";

echo "========== menghitung keliling persegi panjang ==========\n";
echo "========== masukkan panjang persegi panjang ==========\n";
$panjang = trim(fgets(STDIN));
echo "========== masukkan lebar persegi panjang ==========\n";
$lebar = trim(fgets(STDIN));
$kelilingPersegiPanjang = 2 * ($panjang + $lebar);
echo "keliling persegi panjang adalah $kelilingPersegiPanjang \n";


echo "############### SEGITIGA ###############"
echo "========== menghitung luas segitiga ==========\n";
echo "========== masukkan alas segitiga ==========\n";
$alasSegitiga = trim(fgets(STDIN));
echo "========== masukkan tinggi segitiga ==========\n";
$tinggi = trim(fgets(STDIN));
$luasSegitiga = $alasSegitiga * $tinggi / 2;
echo "luas segitiga adalah $luasSegitiga \n";

echo "========== menghitung keliling segitiga ==========\n";
echo "========== masukkan sisi1 segitiga ==========\n";
$sisi1 = trim(fgets(STDIN));
echo "========== masukkan sisi2 segitiga ==========\n";
$sisi2 = trim(fgets(STDIN));
echo "========== masukkan sisi3 segitiga ==========\n";
$sisi3 = trim(fgets(STDIN));
$kelilingSegitiga = $sisi1 + $sisi2 + $sisi3;
echo "keliling segitiga adalah $kelilingSegitiga \n";


echo "############### LINGKARAN ###############"
echo "========== menghitung luas lingkaran ==========\n";
echo "========== masukkan luas lingkaran ==========\n";
$luasLingkaran = trim(fgets(STDIN));
$luasLingkaran = 22 / 7 * $luasLingkaran * $luasLingkaran;
echo "luas lingkaran adalah $luasLingkaran\n";

echo "========== menghitung keliling lingkaran ==========\n";
echo "========== masukkan jari-jari lingkaran ==========\n";
$jari2 = trim(fgets(STDIN));
$kelilingLingkaran = 2 * 22 / 7 * $jari2;
echo "keliling lingkaran adalah $kelilingLingkaran\n";

?>
