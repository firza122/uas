<?php
session_start();
include 'connection.php';


if (isset($_GET['npm'])) {
    $npm = ($_GET['npm']);
    $query = "SELECT * FROM tbl_mahasiswa WHERE npm = '$npm'";
    $result = mysqli_query($conn,$query);

if (!$result) {
    die ("Query Error:".mysqli_errno($conn).
    "-".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    $npm = $data["npm"];
    $namaMhs = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHp = $data["noHp"];
}else {
    header("Location:viewbuku.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <head>
        <style>
            h1 {
               text-align: center; 
            }
            .container {
                width: 400px;
                margin: auto;
            }
        </style>
</head>
<body>
    <h1>Edit Data Buku</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proseseditbuku.php" method="post">
           
    <fieldset>
        
        <table class="table">
        <tr>
            <th scope="col"><label for="npm">No : </label></th>
            <input type="hidden" name="npm" value="<?php echo $npm;?>">
            <td><input type="text" name="npmDisabled" id="npmDisabled" value="<?php echo $npm ?>"></td>
        </tr>
        <tr>
            <th scope="col"><label for="namaMhs">Judul Buku : </label></th>   
            <td><input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs;?>"></td>
        </tr>
        <tr>
            <th scope="col"><label for="prodi">Penerbit : </label><th>   
            <input type="text" name="prodi" id="prodi" value="<?php echo $prodi;?>">
        </tr>
        <tr>
            <th scope="col"><label for="alamat">Tahun Terbit : </label></th>   
            <td><input type="text" name="alamat" id="alamat" value="<?php echo $alamat;?>"></td>
        </tr>
        <tr>
            <th scope="col"><label for="noHp">Harga : </label></th> 
            <td><input type="text" name="noHp" id="noHp" value="<?php echo $noHp; ?>"></td>
        </tr>
    </fieldset>
        </table>
        <tr>
            <td><input type="submit" name="edit" value="Update Data"></td>
        </tr>
        </form>
    </div>
</body>
</html>
