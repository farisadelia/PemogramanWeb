<?php
require('Model.php');
if (isset($_GET['id_member'])) {
    hapusMember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style2.css">
    <title>Member Perpus</title>
</head>
<center>

    <body>
        <h2 style="text-align:Center">Member</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilMember();
                ?>
            </tbody>
        </table>
        <br></br>
        <a href="FormMember.php"><button>Tambah Member</button></a>
        </div>
    </body>
</center>

</html>