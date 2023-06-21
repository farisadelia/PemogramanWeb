<?php
// Deklarasi Variabel untuk menyimpan hasil konversi suhu
$hasil;
$derajatSuhu;

if (isset($_POST["konversi"])) {
    // Deklarasikan variabel yang mengambil nilai suhu
    $nilaiSuhu = $_POST["nilai"];
    // Mencek dari suhu mana yang ingin diubah
    if ($_POST["suhu"] == "Celcius") {
        // Untuk mencek ke suhu apa nilainya diubah
        if ($_POST["konversiSuhu"] == "Celcius") {
            $hasil = $nilaiSuhu;
            $derajatSuhu = "C";
        } else if ($_POST["konversiSuhu"] == "Fahrenheit") {
            $hasil = ($nilaiSuhu * (9 / 5)) + 32;
            $derajatSuhu = "F";
        } else if ($_POST["konversiSuhu"] == "Rheamur") {
            $hasil = ($nilaiSuhu * (4 / 5));
            $derajatSuhu = "R";
        } else if ($_POST["konversiSuhu"] == "Kelvin") {
            $hasil = ($nilaiSuhu + 273.15);
            $derajatSuhu = "K";
        }
    } else if ($_POST["suhu"] == "Fahrenheit") {
        // Untuk mencek ke suhu apa nilainya diubah
        if ($_POST["konversiSuhu"] == "Celcius") {
            $hasil = ($nilaiSuhu - 32) * (5 / 9);
            $derajatSuhu = "C";
        } else if ($_POST["konversiSuhu"] == "Fahrenheit") {
            $hasil = $nilaiSuhu;
            $derajatSuhu = "F";
        } else if ($_POST["konversiSuhu"] == "Rheamur") {
            $hasil = (($nilaiSuhu - 32) * (4 / 9));
            $derajatSuhu = "R";
        } else if ($_POST["konversiSuhu"] == "Kelvin") {
            $hasil = ((($nilaiSuhu - 32) * (5 / 9)) + 273.15);
            $derajatSuhu = "K";
        }
    } else if ($_POST["suhu"] == "Rheamur") {
        // Untuk mencek ke suhu apa nilainya diubah
        if ($_POST["konversiSuhu"] == "Celcius") {
            $hasil = ($nilaiSuhu * (5 / 4));
            $derajatSuhu = "C";
        } else if ($_POST["konversiSuhu"] == "Fahrenheit") {
            $hasil = (($nilaiSuhu * (9 / 4)) + 32);
            $derajatSuhu = "F";
        } else if ($_POST["konversiSuhu"] == "Rheamur") {
            $hasil = $nilaiSuhu;
            $derajatSuhu = "R";
        } else if ($_POST["konversiSuhu"] == "Kelvin") {
            $hasil = (($nilaiSuhu * (5 / 4)) + 273.15);
            $derajatSuhu = "K";
        }
    } else if ($_POST["suhu"] == "Kelvin") {
        // Untuk mencek ke suhu apa nilainya diubah
        if ($_POST["konversiSuhu"] == "Celcius") {
            $hasil = ($nilaiSuhu - 273.15);
            $derajatSuhu = "C";
        } else if ($_POST["konversiSuhu"] == "Fahrenheit") {
            $hasil = ((($nilaiSuhu - 273.15) * (9 / 5)) + 32);
            $derajatSuhu = "F";
        } else if ($_POST["konversiSuhu"] == "Rheamur") {
            $hasil = (($nilaiSuhu - 273.15) * (4 / 5));
            $derajatSuhu = "R";
        } else if ($_POST["konversiSuhu"] == "Kelvin") {
            $hasil = $nilaiSuhu;
            $derajatSuhu = "K";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doc</title>

</head>

<body>
    <form action="PRAK203.php" method="POST">
        <p>Output yang diinginkan : </p>

        <p>Nilai : <input type="text" name="nilai" id="nilai"></p>

        <p>Dari : </p>
        <input type="radio" name="suhu" value="Celcius">Celcius <br>
        <input type="radio" name="suhu" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="suhu" value="Rheamur">Rheamur<br>
        <input type="radio" name="suhu" value="Kelvin">Kelvin<br>

        <p>Ke : </p>
        <input type="radio" name="konversiSuhu" value="Celcius">Celcius<br>
        <input type="radio" name="konversiSuhu" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="konversiSuhu" value="Rheamur">Rheamur<br>
        <input type="radio" name="konversiSuhu" value="Kelvin">Kelvin<br>

        <input type="submit" name="konversi" value="Konversi"><br>
        <?php if (isset($_POST["konversi"])) : ?>
            <h1>Hasil Konversi : <?= number_format($hasil, 1) ?>°<?=
                                                                    $derajatSuhu; ?></h1>
        <?php endif ?>
    </form>

</body>

</html>