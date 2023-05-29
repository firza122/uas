<?php
session_start();
include 'connection.php';
if (isset($_GET['npm'])) {

    $npm = $_GET['npm'];
    $query = "DELETE FROM tbl_mahasiswa WHERE npm = '$npm'";
    $hasil_query = mysqli_query($conn,$query);

if(!$hasil_query) {
    die ("Query gagal dijalankan : ".mysqli_errno($conn).
    "-".mysqli_error($conn));
    }
}

header("location:viewbuku.php");

?>