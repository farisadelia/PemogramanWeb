<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>" : "<title>Tambah Buku</title>" ?>
</head>

<body>
    <h2>Form Buku</h2>
    <form action="" method="post">
        <?php
        if (isset($_GET['id_buku'])) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($conn, $sql);
            foreach ($result as $res) :

        ?>

                <table>
                    <tr>
                        <td>ID Buku</td>
                        <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ? "value = 
" . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ? "value = "
                                                                . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
                    </tr>
                    <tr>
                        <td>Nama Penulis</td>
                        <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value = 
" . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ? "value 
= " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ? "value 
= " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if (isset($_GET['id_buku'])) {
                                echo "<button type=\"submit\" name=\"update\">Edit</button>";
                            } else {
                                echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            <?php
            endforeach;
        } else {
            ?>
            <table>
                <tr>
                    <td>ID Buku</td>
                    <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ? "value = 
" . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ? "value = "
                                                            . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Nama Penulis</td>
                    <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value = 
" . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ? "value 
= " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ? "value 
= " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if (isset($_GET['id_buku'])) {
                            echo "<button type=\"submit\" name=\"update\">Edit</button>";
                        } else {
                            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        <?php } ?>
    </form>
    <br>
    <a href="Buku.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahBuku(
            $_POST['id_buku'],
            $_POST['judul'],
            $_POST['penulis'],
            $_POST['penerbit'],
            $_POST['thnterbit']
        );
    }
    if (isset($_POST['update'])) {
        updateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    ?>
</body>

</html>