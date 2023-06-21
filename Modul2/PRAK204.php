<?php
$hasil;
if (isset($_POST["konversi"])) {
    if ($_POST["nilai"] == 0) {
        $hasil = "Nol";
    } else if ($_POST["nilai"] >= 1 && $_POST["nilai"] <= 9) {
        $hasil = "Satuan";
    } else if ($_POST["nilai"] == 10) {
        $hasil = "Puluhan";
    } else if ($_POST["nilai"] >= 11 && $_POST["nilai"] <= 19) {
        $hasil = "Belasan";
    } else if ($_POST["nilai"] >= 20 && $_POST["nilai"] <= 99) {
        $hasil = "Puluhan";
    } else if ($_POST["nilai"] >= 100 && $_POST["nilai"] <= 999) {
        $hasil = "Ratusan";
    } else {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="PRAK204.php" method="post">

        <p>Output yang diinginkan :</p>

        <p>Nilai : <input type="text" name="nilai" id="nilai"></p>
        <!-- <button type="submit" name="konversi">Konversi</button> -->
        <input type="submit" name="konversi">

        <!-- Mencetak Output -->
        <?php if (isset($_POST["konversi"])) : ?>

            <h1>Hasil: <?= $hasil; ?></h1>

        <?php endif ?>
    </form>
</body>

</html>