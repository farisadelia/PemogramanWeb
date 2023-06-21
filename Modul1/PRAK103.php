<?php

// Deklarasi variabel, Ketentuan Soal
$celcius = 37.841;

// Deklarasi Rumus Konversi suhu dari Celcius
$fahrenheit = ($celcius * (9 / 5)) + 32;
$reamur     = $celcius * (4 / 5);
$kelvin     = $celcius + 273;

// Output Program
echo "Fahrenreit (F) : " . number_format($fahrenheit, 4) . "<br>";
echo "Reamur (R)     : " . number_format($reamur, 4) . "<br>   ";
echo "Kelvin (K)     : " . number_format($kelvin, 4);
