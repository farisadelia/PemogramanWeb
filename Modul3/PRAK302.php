<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 2</title>
</head>

<body>
    <form action="" method="post">
        Tinggi : <input type="text" name="jumlah"> <br>
        Alamat Gambar : <input type="text" name="gambar"> <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;
        $j = 1;
        $k = $jumlah;
        $gambar = $_POST['gambar'];
    }
    ?>
    <?php if (isset($_POST['submit'])) : ?>
        <?php while ($i <= $jumlah) { ?>
            <?php while ($j < $i) { ?>
                <img style="width: 25px; opacity: 0;" src=<?= "$gambar"; ?> alt="">
                <?php $j = $j + 1; ?>
            <?php } ?>
            <?php while ($k >= $i) { ?>
                <img style="width : 25px" src=<?= "$gambar"; ?> alt="">
                <?php $k = $k - 1; ?>
            <?php } ?>
            <br>
            <?php
            $j = 1;
            $k = $jumlah;
            $i = $i + 1;
            ?>
        <?php } ?>
    <?php endif; ?>
</body>

</html>