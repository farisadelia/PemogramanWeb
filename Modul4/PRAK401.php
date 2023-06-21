<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 1</title>
    <style>
        td {
            width: 40px;
            height: 40px;
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>
    <?php
    $panjang = $lebar = $nilai = "";
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = (string)$_POST['nilai'];

        $arrayNilai = explode(" ", $nilai);
        if ($panjang * $lebar < count($arrayNilai)) {
            echo "Panjang nilai tidak sesuai dengan ukuran matrix";
        } else { ?>
            <table cellspacing="0" cellpadding="0">
                <?php
                for ($i = 0; $i < $panjang; $i++) {
                ?>
                    <tr>
                        <?php for ($j = 0; $j < $lebar; $j++) { ?>
                            <td style="text-align: center;">
                                <?php
                                if (empty($arrayNilai[($i * $panjang) + $j])) {
                                    echo 0;
                                } else {
                                    echo $arrayNilai[($i * $panjang) + $j];
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
    <?php
        }
    }
    ?>
</body>

</html>