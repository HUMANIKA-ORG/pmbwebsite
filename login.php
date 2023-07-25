<?php
    require_once('config.php');    

    if (isset($_POST['login'])) 
    {
        session_start();
        $nama = $_POST['nama']; 
        $password = $_POST['password']; 

        $query = "SELECT * FROM users WHERE Nama = '$nama' AND Password = '$password'";        
        $result = $conn->query($query);

        if ($result !== false && $result->num_rows > 0)
        {
            header('Location: dashboard.php');
        }
        else
        {
            $_SESSION['pesan'] = "ERROR: Data Tidak Ada";
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
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <form action="" method="POST">
            <?php 
                session_start();
                if (isset($_SESSION['pesan']) && $_SESSION['pesan'] != NULL) {
                    echo($_SESSION['pesan']);
                    unset($_SESSION['pesan']);
                }
            ?>
            <label>Nama Lengkap</label>
            <input name="nama" type="text">
            <label>Password</label>
            <input name="password" type="password">
            <a href="register.php">Belum punya akun? Register</a>
            <button type="submit" name="login">Login</button>
        </form>
    </section>
</body>
</html>