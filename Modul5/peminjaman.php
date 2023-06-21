<?php
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapusPeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Peminjaman </title>
    <link rel="stylesheet" href="style2.css">
</head>
<center>

    <body>
        <h2 style="text-align:center">Peminjaman</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilPeminjaman();
                ?>
            </tbody>
        </table>
        <br></br>
        <a href="FormPeminjaman.php"><button>Tambah Peminjaman</button></a>
        </div>
    </body>
</center>

</html>