<?php
    // Koneksi database
    include 'koneksi.php';

    // Mendapatkan data dari form
    $id = $_GET['id'];

    // Input data ke database
    mysqli_query($koneksi,"DELETE from mahasiswa where id='$id'");

    // Pengalihan halaman
    header("location: index.php");
    exit(); // Penting untuk menghentikan eksekusi kode setelah pengalihan header
?>
