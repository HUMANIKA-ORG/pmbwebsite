<?php
    require_once('config.php');
    
    if (isset($_POST['register']))
    {
        session_start();
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];
        $query = "INSERT INTO users (Nama, Password, Alamat, Jurusan) VALUES ('$nama', '$password', '$alamat', '$jurusan')";

        $result = $conn->query($query);

        if ($result) {
            $_SESSION['pesan'] = "Berhasil Register, Silahkan Login";
            header('Location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <h1>Brand</h1>
            <ul class="navbar-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <form action="" method="POST">
            <label>Nama Lengkap</label>
            <input name="nama" type="text">
            <label>Password</label>
            <input name="password" type="password">
            <label>Alamat</label>
            <input name="alamat" type="text">
            <label>Jurusan</label>
            <select name="jurusan">
                <option>Teknik Informatika</option>
                <option>Sistem Informasi</option>
                <option>Teknik Sipil</option>
                <option>Teknik Industri</option>
            </select>
            <a href="login.php">Sudah punya akun? Login</a>
            <button type="submit" name="register">Daftar</button>
        </form>
    </section>
</body>
</html>