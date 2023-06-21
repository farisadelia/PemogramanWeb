<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $errorNama = $errorNim = $errorJK = "";
    if (isset($_POST["submit"])) {
        if (empty($_POST["nama"])) {
            $errorNama = "Nama tidak boleh kosong";
        }
        if (empty($_POST["nim"])) {
            $errorNim = "Nim tidak boleh kosong";
        }
        if (empty($_POST["jenisKelamin"])) {
            $errorJK = "Jenis Kelamin tidak boleh kosong";
        }
    }
    ?>

    <form action="PRAK202.php" method="POST">
        <label for="nama">NAMA : </label>
        <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>">
        <span class="error"> * <?php echo $errorNama; ?> </span>
        <br>

        <label for="nim">NIM : </label>
        <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">

        <span class="error"> * <?php echo $errorNim; ?> </span>
        <br>

        <label for="jenisKelamin">Jenis Kelamin : </label>
        <span class="error"> * <?php echo $errorJK; ?> </span>
        <br>
        <input type="radio" name="jenisKelamin" value="Laki-laki" <?php if (isset($_POST["jenisKelamin"]) and $_POST["jenisKelamin"] == "Laki-laki") echo "checked"; ?>>
        <label for="laki">Laki - laki</label><br>
        <input type="radio" name="jenisKelamin" value="Perempuan" <?php if (isset($_POST["jenisKelamin"]) and $_POST["jenisKelamin"] == "Perempuan") echo "checked"; ?>>
        <label for="puan">Perempuan</label>
        <br>

        <input type="submit" name="submit" value="Submit">
        <br>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["jenisKelamin"])) {
            echo "<h1> Output : </h1>";
            if (!empty($_POST["nama"])) {
                echo $_POST["nama"] . "<br>";
            }
            if (!empty($_POST["nim"])) {
                echo $_POST["nim"] . "<br>";
            }
            if (!empty($_POST["jenisKelamin"])) {
                echo $_POST["jenisKelamin"] . "<br>";
            }
        }
    }

    ?>

</body>

</html>