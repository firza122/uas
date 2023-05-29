<?php
session_start();
include 'connection.php';
if (isset($_POST['input'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];
    $query = "INSERT INTO tbl_mahasiswa VALUES ('$npm', '$namaMhs','$prodi','$alamat', '$noHP')";
    $result = mysqli_query($conn,$query);

if(!$result) {
    die ("Query gagal dijalankan : ".mysqli_errno($conn).
    "-".mysqli_error($conn));
    }
}

header("location:viewbuku.php");

?>