<?php

// NIM : 2110817210020, akhiran NIM adalah 0
$nim = 0;

// Deklarasi Variabel, Ketentuan soal
$jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$phi = 3.14;

// Deklarasi Rumus Bangun Ruang
$volume_tabung = $phi * $jari * $jari * $tinggi;
$volume_kerucut = (1 / 3) * $phi * $jari * $jari * $tinggi;
$volume_bola = (4 / 3) * $phi * $jari * $jari * $jari;
$volume_prisma = (($sisi * $sisi) / 2) * $tinggi;           // prisma alas segitiga
$volume_limas = (($panjang * $lebar) / 3) * $tinggi;        // limas alas persegi panjang

if ($nim == 0 || $nim == 1) {
    echo "Volume Tabung adalah " . number_format("$volume_tabung", 3) . " m3";
} elseif ($nim == 2 || $nim == 3) {
    echo "Volume Kerucut adalah " . number_format("$volume_kerucut", 3) . " m3";
} elseif ($nim == 4 || $nim == 5) {
    echo "Volume Bola adalah " . number_format("$volume_bola", 3) . " m3";
} elseif ($nim == 6 || $nim == 7) {
    echo "Volume Prisma adalah " . number_format("$volume_prisma", 3) . " m3";
} elseif ($nim == 8 || $nim == 9) {
    echo "Volume Limas adalah " . number_format("$volume_limas", 3) . " m3";
}
