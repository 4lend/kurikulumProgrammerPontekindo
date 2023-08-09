<?php
function hargaProduk($data) {
    $minPrice = min($data);
    $maxPrice = max($data);
    $averagePrice = array_sum($data) / count($data);
    
    echo "Harga terkecil: $minPrice\n";
    echo "Harga terbesar: $maxPrice\n";
    echo "Rata-rata harga: $averagePrice\n";
}
?>
