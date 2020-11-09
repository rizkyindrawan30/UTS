<?php 
    require '../../functions.php';
    if( isset($_POST["submit"]) ){
        // cek apakah data berhasil atau tidak
        if ( tambahmenu($_POST) > 0) {
            echo "
                <script>
                    alert('menu berhasil ditambahkan!');
                    document.location.href = 'menu_makanan.php'
                </script>";
        } else {
            echo "
            <script>
                alert('menu berhasil ditambahkan!');
                document.location.href = 'menu_makanan.php'
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <title>Tambah Menu Makanan</title>
</head>
<body>
    <form action=""  method="POST">
        <br><br>
        <center>
            <h3>Tambah Menu Makanan</h3>
        </center>
        <br>
        <table border="0" cellspacing="0" cellpadding="5" align="center">
            <tr>
                <td><label for="nama">Nama Makanan</label></td>
                <td> : </td>
                <td><input type="text" id="nama" class="form-control" name="makanan"></td>
            </tr>
            <tr>
                <td><label for="img">Gambar</label></td>
                <td> : </td>
                <td><input type="file" id="img" class="" name="img"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td> : </td>
                <td><input type="text" id="harga" class="form-control" name="harga"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi</label></td>
                <td> : </td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea></td>
            </tr>
            
            <tr>
                <td colspan="3" align="center"><button type="submit" class="btn btn-primary" name="submit">Tambah Menu</button></td>
            </tr>
        </table>
    </form>
</body>
</html>