<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 1</title>
</head>

<body>
    <form method="post" action="PRAK301.php">
        Jumlah Peserta : <input type="text" name="peserta"><br>
        <input type="submit" name="submit" value="Cetak"><br>
    </form>
    <?php
    if (isset($_POST['peserta'])) {
        $jumlah = $_POST['peserta'];
        $i = 1;

        while ($i <= $jumlah) {
            $warna = ($i % 2 == 1) ? 'red' : 'green';
            echo "<h1><span style='color: $warna'>Peserta ke-$i</span><br>";
            $i = $i + 1;
        }
    }
    ?>
</body>

</html>