<?php
require('Model.php');
if (isset($_GET['id_buku'])) {
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buku Perpus</title>
    <link rel="stylesheet" href="style2.css">
</head>
<center>

    <body>
        <h2 style="text-align:center;">Buku</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilBuku();
                ?>
            </tbody>
        </table>
        <br></br>
        <a href="FormBuku.php"><button>Tambah Buku</button></a>
        </div>
    </body>
</center>

</html>