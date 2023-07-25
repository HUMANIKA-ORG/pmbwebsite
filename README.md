# Dokumentasi PMB Website

<p>Departemen Pengembangan Minat Bakat Himpunan Mahasiswa Teknik Informatika Universitas Banten Jaya</p>

## Hyper Text Markup Language (HTML)
<p>HTML adalah bahasa markup yang digunakan untuk membangun struktur dasar sebuah halaman web. Singkatan dari "HyperText Markup Language", HTML berfungsi untuk menentukan elemen-elemen seperti teks, gambar, video, tautan, dan bagian-bagian lain dari suatu halaman web. HTML menggunakan tag-tag khusus untuk memberi instruksi kepada browser bagaimana cara menampilkan konten di halaman web.</p>


### Struktur Dasar HTML
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Dasar HTML</title>
</head>
<body>
    
</body>
</html>
```



### Contoh Semantic HTML
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semantic HTML</title>
</head>
<body>
    <header>
        HUMANIKA 2023
    </header>
    <nav>
        <h1>HUMANIKA</h1>
        <ul>
            <li>List 1</li>
            <li>List 2</li>
            <li>List 3</li>
        </ul>
    </nav>
    <section>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Earum animi sapiente saepe odio velit, voluptates ratione soluta, 
            iure doloremque quibusdam numquam ipsum eos. Animi impedit libero in saepe quibusdam tempore, 
            nisi perferendis laborum nam vitae molestias rem dolorum exercitationem dolores architecto 
            eveniet perspiciatis nihil, unde praesentium qui? Incidunt quod blanditiis facilis distinctio
            corrupti facere est? Voluptas officiis quae suscipit eos, illum incidunt corporis velit atque facilis eius
            quos repudiandae consectetur nisi expedita illo, animi a fugiat ipsum tempora omnis nesciunt, maiores ratione nemo 
            fuga! Sequi vitae cumque, dolorem libero deleniti hic nesciunt fuga atque eum a maiores inventore, 
            possimus officia impedit. Vel, explicabo iusto odio amet adipisci minima, 
            porro in recusandae ducimus aperiam ratione quisquam magnam! Corrupti saepe non iusto dolore impedit, 
            sit adipisci!
        </p>        
    </section>
    <footer>&copy;HUMANIKA 2023</footer>
</body>
</html>
```

## Cascading Style Sheets
<p>
    CSS adalah bahasa gaya yang digunakan untuk mengatur tampilan atau desain dari halaman web yang telah dibuat dengan HTML. Singkatan dari "Cascading Style Sheets", CSS memungkinkan pengembang web untuk mengontrol warna, ukuran teks, layout, dan elemen visual lainnya pada halaman web. Dengan menggunakan CSS, pengembang dapat membuat tampilan yang konsisten, menarik, dan responsif di berbagai perangkat.
</p>


### Macam Macam CSS
1. Inline CSS
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Inline</title>
</head>
<body>
    <h1 style="background-color: red; color: blue;">HUMANIKA</h1>    
</body>
</html>

```
2. Internal CSS
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Inline</title>
    <style>
        h1 {
            background-color: red;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>HUMANIKA</h1>    
</body>
</html>
```

3. External CSS
    - HTML
    ```
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CSS Inline</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 style="background-color: red; color: blue;">HUMANIKA</h1>    
    </body>
    </html>

    ```
    - CSS
    ```
     h1 {
        background-color: red;
        color: blue;
     }
    ```
## Hypertext PreProcessor (PHP)
<p>PHP adalah bahasa pemrograman server-side yang digunakan untuk mengembangkan aplikasi web dinamis. Singkatan dari "Hypertext Preprocessor", PHP berfungsi untuk memproses data dari server dan menghasilkan konten dinamis yang ditampilkan ke pengguna. PHP dapat berinteraksi dengan database, memproses formulir, mengelola sesi pengguna, dan melakukan banyak tugas pemrograman lainnya yang membantu website berfungsi secara interaktif. Tag php ditandai oleh 
</p>


```
<?php echo("Hello World") ?>
```


### Contoh PHP Dasar
```
<!DOCTYPE html>
<html>
<head>
    <title>Tanggal dan Waktu</title>
</head>
<body>
    <h1>Sekarang tanggal <?php echo date("d F Y"); ?></h1>
    <p>Pukul <?php echo date("H:i:s"); ?></p>
</body>
</html>
```
```
<?php 
    $variableBebas = "Budi";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tanggal dan Waktu</title>
</head>
<body>
    <h1>Sekarang tanggal <?php echo date("d F Y"); ?></h1>
    <p>Namaku adalah <?php $variableBebas ?></p>
</body>
</html>

```

### Structured Query Language (SQL)

<p>
SQL adalah bahasa khusus yang digunakan untuk berinteraksi dengan database. Singkatan dari "Structured Query Language", SQL memungkinkan Anda untuk membuat, mengubah, menghapus, dan mengambil data dari database. Dengan menggunakan SQL, website dapat menyimpan dan mengelola informasi penting seperti informasi pengguna, posting blog, dan data lainnya.
</p>

1. Data Definition Language (DDL)
    <p>
        DDL digunakan untuk mengelola struktur objek dalam basis data. DDL mencakup perintah-perintah seperti CREATE, ALTER, dan DROP yang digunakan untuk membuat, mengubah, atau menghapus tabel, kolom, indeks, dan objek lainnya dalam basis data.
    </p>
    ```
    CREATE DATABASE namadatabasenya;

    CREATE TABLE namatable(
        ID INT(11) AUTO_INCREMENT PRIMARY KEY,
        Nama VARCHAR(24),
        Asal VARCHAR(24), 
    );

    ALTER TABLE namatable ADD Alamat VARCHAR(124);

    DROP TABLE namatable;

    DROP DATABASE namadatabase;
    ```
2. Data Manipulation Language (DML)
    <p>
        DML digunakan untuk memanipulasi data yang ada dalam tabel. DML mencakup perintah-perintah seperti SELECT, INSERT, UPDATE, dan DELETE.
    </p>

    ```
    SELECT * FROM namatable;

    SELECT * FROM namatable WHERE Nama = 'Budi';

    INSERT INTO namatable (Nama, Asal) VALUES ('Ahmad', 'Serang');

    UPDATE namatable SET Nama = 'Ahmad' WHERE Nama = 'Budi';

    DELETE FROM namatable WHERE Nama = 'Ahmad'; 
    ```
3. Data Control Language (DCL)
    <p>
        DCL digunakan untuk mengontrol hak akses pengguna dan transaksi dalam basis data. DCL mencakup perintah-perintah seperti GRANT dan REVOKE yang digunakan untuk memberikan atau mencabut hak akses, serta perintah COMMIT dan ROLLBACK untuk mengelola transaksi.
    </p>

    ```
    GRANT hakakses ON namatable TO pengguna;
    ```

    <h1>Mengijinkan semua hak ases kepada pengguna</h1>
    ```
    GRANT ALL PRIVILEGES ON *.* TO 'namauser'@'hostname';
    ```

    <h1>Melepas hak ases dari pengguna</h1>
    ```
    REVOKE hakases ON namatable FROM pengguna;
    ```


    <h1>Melepas semua hak ases dari pengguna</h1>
    ```
    REVOKE ALL PRIVILEGES ON *.* FROM 'namauser'@'hostname';
    ```    


## Contoh Penerapan HTML, CSS, PHP, SQL


```
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
```