<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST" action="PRAK201.php">
        <label for="namaja">Nama 1 : </label>
        <input type="text" name="nama1" id="nama1"><br>

        <label for="nama2">Nama 2 : </label>
        <input type="text" name="nama2" id="nama2"><br>

        <label for="nama3">Nama 3 : </label>
        <input type="text" name="nama3" id="nama3"><br>

        <input type="submit" name="submit" value="Urutkan !">
    </form>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    // Menerima input dari form
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    // Mengurutkan nama dari urutan huruf abjad terkecil ke terbesar menggunakan metode kondisional
    if ($nama1 < $nama2 && $nama1 < $nama3) {
        echo "$nama1<br>";
        if ($nama2 < $nama3) {
            echo "$nama2<br>";
            echo "$nama3<br>";
        } else {
            echo "$nama3<br>";
            echo "$nama2<br>";
        }
    } elseif ($nama2 < $nama1 && $nama2 < $nama3) {
        echo "$nama2<br>";
        if ($nama1 < $nama3) {
            echo "$nama1<br>";
            echo "$nama3<br>";
        } else {
            echo "$nama3<br>";
            echo "$nama1<br>";
        }
    } else {
        echo "$nama3<br>";
        if ($nama1 < $nama2) {
            echo "$nama1<br>";
            echo "$nama2<br>";
        } else {
            echo "$nama2<br>";
            echo "$nama1<br>";
        }
    }
}
