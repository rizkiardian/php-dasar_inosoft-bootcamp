<?php
function luas_lingkaran($jari_jari) {
    return round(3.14 * $jari_jari * $jari_jari, 2);
}

function keliling_lingkaran($jari_jari) {
    return round(2 * 3.14 * $jari_jari, 2);
}

function luas_persegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        $panjang = $angka / 3;
        $lebar = $angka / 5;
        $hasil = luas_persegi($panjang, $lebar);
        echo number_format($hasil, 2) . "\n";
    } elseif ($angka % 3 == 0) {
        $jari_jari = $angka / 3;
        $hasil = luas_lingkaran($jari_jari);
        echo number_format($hasil, 2) . "\n";
    } elseif ($angka % 5 == 0) {
        $jari_jari = $angka / 5;
        $hasil = keliling_lingkaran($jari_jari);
        echo number_format($hasil, 2) . "\n";
    } else {
        echo number_format($angka, 2) . "\n";
    }
}
?>