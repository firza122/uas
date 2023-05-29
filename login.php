<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Masukan Username and Password dulu masbro!');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Masukan Password Bosq');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Masukan Username Bosq);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];


            if ($username == $username && $password == $password) {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location:viewbuku.php');
            }
        } else {
            echo "<script>alert(' Aduh Masbro! Username dan Password Salah');</script>";
            exit;
        }
    }

}
