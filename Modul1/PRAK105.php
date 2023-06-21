<?php

// Deklarasi Daftar Smartphone menggunakan Associative Array
$seri_hp = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5");

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

        th {
            font-size: 23px;
            background-color: red;
            padding: 20px 0px 20px 0px;
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
            <td><?php echo $seri_hp["S22"] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp["S22+"] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp["A03"] ?></td>
        </tr>
        <tr>
            <td><?php echo $seri_hp["Xcover5"] ?></td>
        </tr>

    </table>
</body>

</html>