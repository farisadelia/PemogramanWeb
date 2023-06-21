<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
    <title>Soal 2</title>
</head>

<body>
    <?php
    $data = [
        [
            "nama" => "Andi",
            "NIM" => 2101001,
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "NIM" => 2101002,
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "NIM" => 2101003,
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "NIM" => 2101004,
            "uts" => 60,
            "uas" => 75
        ],
    ];
    foreach ($data as $key => $value) {
        $uts = $value['uts'];
        $uas = $value['uas'];
        $data[$key]['rerata'] = ($uts * (4 / 10)) + ($uas * (6 / 10));
        if ($data[$key]['rerata'] >= 80) {
            $data[$key]['huruf'] = 'A';
        } elseif ($data[$key]['rerata'] >= 70 and ($data[$key]['rerata'] <=
            79)) {
            $data[$key]['huruf'] = 'B';
        } elseif ($data[$key]['rerata'] >= 60 and ($data[$key]['rerata'] <=
            69)) {
            $data[$key]['huruf'] = 'C';
        } elseif ($data[$key]['rerata'] >= 50 and ($data[$key]['rerata'] <=
            59)) {
            $data[$key]['huruf'] = 'D';
        } else {
            $data[$key]['huruf'] = 'E';
        }
    }
    ?>
    <table border="1" ,cellspacing="0" cellpadding="6">
        <tr bgcolor="lightgrey">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($data as $mhs) { ?>
            <tr>
                <td><?php echo $mhs["nama"]; ?></td>
                <td><?php echo $mhs["NIM"]; ?></td>
                <td><?php echo $mhs["uts"]; ?></td>
                <td><?php echo $mhs["uas"]; ?></td>
                <td><?php echo $mhs["rerata"]; ?></td>
                <td><?php echo $mhs["huruf"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>