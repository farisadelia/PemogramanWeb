<head>
    <title>Soal 3</title>
</head>

<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah"></br>
        Batas Atas : <input type="number" name="atas"></br>
        <input type="submit" value="Cetak" name="submit"></br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];

        do {
            echo (($bawah + 7) % 5 == 0) ? "<img src='star-images-9441.png' width='15px' height='15px'>&nbsp;" : "$bawah&nbsp;";
            $bawah++;
        } while ($bawah <= $atas);
    }
    ?>
</body>

</html>