<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DATA MAHASISWA</title>
</head>
<body>
    <h2> CRUD DATA MAHASIWA - EDIT DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a><br/>
    <h3>EDIT DATA MAHASISWA</h3>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>

    <form method="post" action="update.php">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d ['id']; ?>">
                <input type="text" name="nama" value="<?php echo $d ['nama']; ?>">
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>
                <input type="number" name="nim" value="<?php echo $d ['nim']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="alamat" value="<?php echo $d ['alamat']; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="SIMPAN"></td>
            </td>
        </tr>
    </form>
    <?php
        }
    ?>
</body>
</html>
