<?php
    // Koneksi database
    include 'koneksi.php';

    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    // Input data ke database
    $query = "INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')";
    mysqli_query($koneksi, $query);

    // Pengalihan halaman
    header("location: index.php");
    exit(); // Penting untuk menghentikan eksekusi kode setelah pengalihan header
?>
