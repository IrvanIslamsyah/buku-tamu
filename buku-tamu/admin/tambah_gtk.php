<?php 

session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahGtk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data GTK berhasil ditambahkan');
                window.location = 'gtk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data GTK gagal ditambahkan');
            window.location = 'gtk.php'
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah GTK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <h3>Tambah Data GTK</h3>

            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

                <label for="Job">Job</label>
                <input type="text" name="Job" id="Job" class="form-control">
                
                <label for="roles">Roles</label>
                <select name="roles" id="roles" class="form-control">
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                    <option value="Guru">Guru</option>
                </select>

                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">

                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>