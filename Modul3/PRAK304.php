<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 4</title>
</head>

<body>
    <?php
    $star = NULL;
    $picture = "<img src='star-images-9441.png' width='50px' height='50px'>";

    if (isset($_POST['star'])) {
        $star = $_POST['star'];
    }
    if (isset($_POST['plus'])) {
        $star = $star + 1;
    }
    if (isset($_POST['mins'])) {
        $star = $star - 1;
    }
    if (empty($star)) {
    ?>
        <form action="" method="post">
            Jumlah bintang <input type="text" name="star"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
    } ?>
    <?php
    if (!empty($star)) {
        echo "Jumlah bintang $star";
    ?>
        <br></br>
        <?php
        for ($i = 0; $i < $star; $i++) {
            echo "$picture";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="star" value="<?= $star ?>" hidden><br>
            <input type="submit" name="plus" value="Tambah">
            <input type="submit" name="mins" value="Kurang">
        </form>
    <?php
    }
    ?>
</body>

</html>