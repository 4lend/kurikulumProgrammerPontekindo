<?php 

echo "############### JAJAR GENJANG ###############";
echo "========== menghitung luas jajar genjang ==========\n";
echo "========== masukkan alas jajar genjang ==========\n";
$alas = trim(fgets(STDIN));
echo "========== masukkan tinggi jajar genjang ==========\n";
$tinggi = trim(fgets(STDIN));
$luasJajarGenjang = $alas * $tinggi;
echo "luas jajar genjang adalah $luasJajarGenjang \n";

echo "========== menghitung keliling jajar genjang ==========\n";
echo "========== masukkan alas jajar genjang ==========\n";
$alas = trim(fgets(STDIN));
echo "========== masukkan tinggi jajar genjang ==========\n";
$tinggi = trim(fgets(STDIN));
$kelilingJajarGenjang = 2 * ($alas + $tinggi);
echo "keliling persegi panjang adalah $kelilingJajarGenjang \n";


echo "############### BELAH KETUPAT ###############";
echo "========== menghitung luas belah ketupat ==========\n";
echo "========== masukkan d1 belah ketupat ==========\n";
$d1 = trim(fgets(STDIN));
echo "========== masukkan d2 belah ketupat ==========\n";
$d2 = trim(fgets(STDIN));
$luasBelahKetupat = 1/2 * $d1 * $d2;
echo "luas belah ketupat adalah $luasBelahKetupat \n";

echo "========== menghitung keliling belah ketupat ==========\n";
echo "========== masukkan d1 belah ketupat ==========\n";
$d1 = trim(fgets(STDIN));
$kelilingBelahKetupat = $d1 * 4;
echo "keliling belah ketupat adalah $kelilingBelahKetupat \n";


echo "############### LAYANG-LAYANG ###############";
echo "========== menghitung luas layang-layang ==========\n";
echo "========== masukkan d1 layang-layang ==========\n";
$d1 = trim(fgets(STDIN));
echo "========== masukkan d2 layang-layang ==========\n";
$d2 = trim(fgets(STDIN));
$luasLayanglayang = 1/2 * $d1 * $d2;
echo "luas layang-layang adalah $luasLayanglayang\n";

echo "========== menghitung keliling layang-layang ==========\n";
echo "========== masukkan panjang sisi1 layang-layang ==========\n";
$sisi1 = trim(fgets(STDIN));
echo "========== masukkan panjang sisi2 layang-layang ==========\n";
$sisi2 = trim(fgets(STDIN));
$kelilingLayangLayang = 2 * ( $sisi1 + $sisi2 );
echo "keliling lingkaran adalah $kelilingLayangLayang\n";


echo "############### TRAPESIUM ###############\n";
echo "========== menghitung luas trapesium ==========\n";
echo "========== masukkan ab trapesium ==========\n";
$ab = trim(fgets(STDIN));
echo "========== masukkan cd trapesium ==========\n";
$cd = trim(fgets(STDIN));
$luasTrapesium = 1/2 * ( $ab + $cd );
echo "luas trapesium adalah $luasTrapesium\n\n";

echo "############### TRAPESIUM ###############\n";
echo "========== menghitung keliling trapesium ==========\n";
echo "========== masukkan ab trapesium ==========\n";
$ab = trim(fgets(STDIN));
echo "========== masukkan bc trapesium ==========\n";
$bc = trim(fgets(STDIN));
echo "========== masukkan cd trapesium ==========\n";
$cd = trim(fgets(STDIN));
echo "========== masukkan da trapesium ==========\n";
$da = trim(fgets(STDIN));
$kelilingTrapesium = $ab + $bc + $cd + $da;
echo "luas trapesium adalah $kelilingTrapesium\n";

?>
