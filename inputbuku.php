<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<head>
    <style>
        h1{
            text-align: center;
        }
        .container{
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
   <h1>Input Data Buku</h1>
   <div class="container">
    <form id="form_mahasiswa" action="prosesinputbuku.php" method="post">
      <fieldset>
        
        <table class="table">
            <div class="inputbox">
                <tr>
                    <th scope="col"><label for="nim">No : </label></th>
                    <td><input type="text" name="npm" id="npm" required="required"></td>
                </tr>                
                <tr>
                    <th scope="col"><label for="nama">Judul Buku : </span></th>
                    <td><input type="text" name="namaMhs" id="namaMhs"></td>
                </tr>
                <tr>
                    <th scope="col"><span for="prodi">Penerbit : </span></th>
                    <td><input type="text" name="prodi" id="prodi"></input></td>
                </tr>
                <tr>
                    <th scope="col"><span for="alamat">Tahun Terbit : </span></th>
                    <td><input type="text" name="alamat" id="alamat"></input></td>
                </tr>
                <tr>
                    <th scope="col"> <span for="noHp">Harga : </span></th>
                    <td><input type="text" name="noHP" id="noHP" placeholder="Contoh Rp.50.000,-"></td>
                </tr>
    </div>
    </table>
        


      </fieldset>
                <tr>
                    <td><input type="submit" name="input" value="Simpan"></td>
    </tr>
            </form>
        </div>
    </body>
</html>