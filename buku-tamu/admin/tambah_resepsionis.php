<?php 

session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahResepsionis($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data resepsionis berhasil ditambahkan');
                window.location = 'resepsionis.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data resepsionis gagal ditambahkan');
            window.location = 'resepsionis.php'
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
    <title>Tambah Resepsionis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <h3>Tambah Data Resepsionis</h3>

            <form action="" method="POST" enctype="multipart/form-data">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                
                <label for="roles">Roles</label>
                <select name="roles" id="roles" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Resepsionis">Resepsionis</option>
                </select>

                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>