<?php

// Deklarasi Daftar Smartphone menggunakan Array
$seri_hp = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <style>
        table,
        th,
        td {
            color: black;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <!-- Membuat Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $seri_hp[0] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp[1] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp[2] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp[3] ?></td>
        </tr>

    </table>
</body>

</html>