<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        tr {
            border: black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <title>Soal 3</title>
</head>

<body>
    <?php
    $data = [
        [
            "no" => 1,
            "nama" => "Ridho",
            "Matkul" => ["Pemrograman 1", "Praktikum Pemrograman 1", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
            "sks" => [2, 1, 2, 3]
        ],
        [
            "no" => 2,
            "nama" => "Ratna",
            "Matkul" => ["Basis Data 1", "Praktikum Basis Data 1", "Kalkulus"],
            "sks" => [2, 1, 3]
        ],
        [
            "no" => 3,
            "nama" => "Tono",
            "Matkul" => ["Rekayasa Perangkat Lunak", "Analisa dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
            "sks" => [3, 3, 3, 3]
        ],
    ];
    foreach ($data as $key => $value) {
        $data[$key]['total'] = array_sum($value['sks']);
        if ($data[$key]['total'] < 7) {
            $data[$key]['ket'] = "Revisi KRS";
        } else {
            $data[$key]['ket'] = "Tidak Revisi";
        }
    }
    ?>
    <table border="1" ,cellspacing="0" cellpadding="5">
        <tr bgcolor="lightgrey">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        foreach ($data as $mhs) {
        ?><tr>
                <td><?php echo $mhs["no"]; ?></td>
                <td><?php echo $mhs["nama"]; ?></td>
                <td><?php echo $mhs["Matkul"][0]; ?> </td>
                <td><?php echo $mhs["sks"][0]; ?> </td>
                <td><?php echo $mhs["total"]; ?> </td>
                <?php
                if ($mhs['total'] < 7) {
                ?> <td bgcolor="red">
                    <?php echo $mhs["ket"];
                } else {
                    ?>
                    <td bgcolor="green">
                    <?php echo $mhs["ket"];
                } ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><?php echo $mhs["Matkul"][1]; ?> </td>
                <td><?php echo $mhs["sks"][1]; ?> </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><?php echo $mhs["Matkul"][2]; ?> </td>
                <td><?php echo $mhs["sks"][2]; ?> </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <?php
                if (!empty($mhs['Matkul'][3])) { ?>
                    <td></td>
                    <td></td>
                    <td><?php echo $mhs["Matkul"][3]; ?> </td>
                    <td><?php
                    }
                    if (!empty($mhs['sks'][3])) { ?>
                        <?php
                        echo $mhs["sks"][3]; ?>
                    </td>
                    <td></td>
            </tr><?php
                    } ?>
    <?php
        } ?>
    </table>
</body>

</html>