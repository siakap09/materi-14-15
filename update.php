<?php
    // Koneksi database
    include 'koneksi.php';

    // get data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    // update database
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id='$id'");

    // back to homepage
    header("location: index.php");
?>
