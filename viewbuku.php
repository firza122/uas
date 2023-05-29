<?php
    session_start();
    include 'connection.php';
?>
<?php $_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    .container{
        min-height: 140px;
        width:200px;
        display: flex;
        justify-content: center;
        align-items: justify;
        flex-direction: column;
        padding: 8px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: darkblue;
        color: white;
        
        padding: 8px;
        margin: 5pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: blue;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkblue;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
    .btn{
      position: fixed;
      
      top:50px;
      right:10px;
    }
    .btn1{
      position: fixed;
      top:200px;
      left:10px;
      margin-top: -10px;
        background-color: green;
        color: white;
        font-weight: 500;
        color: white;
    }
</style>
</head>

<body>
<div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
<a href="index.php" class="btn">LOGOUT</a>
</div>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang="en">
<head>
    <style>
        h1{
            text-align: center;
        }
        
    </style>
</head>
<body>
   <h1>DAFTAR BUKU</h1>
   <?php 
    if(isset($_GET['cari'])){
	    $cari = $_GET['cari'];
    }
    ?>
   <a href="inputbuku.php" class="btn1">Input Data</a>
   <br />
   <table class="table">
    <tr>
        <th>NO</th>
        <th>JUDUL BUKU</th>
        <th>PENERBIT</th>
        <th>TAHUN TERBIT</th>
        <th>HARGA</th>
        <th>Pilihan</th>
        
    </tr>
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $query = "SELECT * FROM tbl_mahasiswa WHERE namaMhs='$cari'";				
    }else{
        $query = "SELECT * FROM tbl_mahasiswa ORDER BY npm ASC ";		
    }
    $result = mysqli_query($conn,$query);

    if(!$result) {
        die ("Query Error : ".mysqli_errno($conn).
        "-".mysqli_error($conn));
    }

    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>$data[npm]</td>";
        echo "<td>$data[namaMhs]</td>";
        echo "<td>$data[prodi]</td>";
        echo "<td>$data[alamat]</td>";
        echo "<td>$data[noHp]</td>";
        echo '<td>
        
         <a href="editbuku.php?npm='.$data['npm'].'" >Edit </a> /
         <a href="hapusbuku.php?npm='.$data['npm'].'"
            onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a> 
        </td>';
        echo '</tr>';
        }
            ?>
        </table>
        <br><br>
       




    </body>
</html>