<?php
include ('connection.php');
session_start();
if (isset($_POST['edit'])) {


    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];

    $query = "UPDATE tbl_mahasiswa SET  namaMhs = '$namaMhs', prodi = '$prodi', alamat = '$alamat', noHp = '$noHp' WHERE npm = '$npm'";
    $result = mysqli_query($conn, $query);

if(!$result) {
    die ("Query gagal dijalankan : ".mysqli_errno($conn).
    "-".mysqli_error($conn));
    }
}

header("location:viewbuku.php");

?>