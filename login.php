<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login - Tabungan Siswa</title>
</head>

<body>
    <div class="container-login">
        <div class="image">
            <img src="gambar/celengan_ayam.png" alt="">
        </div>
        <div class="title-form">
            <h3>Tabungan Siswa</h3>
            <h1>Selamat Datang</h1>
        </div>
        <form class="form-container" action="./proses/cek_login.php" method="POST">
            <input placeholder="Username" type="text" name="username">
            <input placeholder="Password" type="password" name="password">
            <button type="submit">Login</button>
        </form>
        <p style="width: 350px; text-align: justify;">
            <strong>Tabungan Siswa:</strong> Pelajari Menabung dengan Cara Menyenangkan! <strong>Platform
                inovatif</strong> untuk
            anak-anak belajar
            keuangan. Ajarkan mereka nilai penting menabung sejak dini. Bergabunglah sekarang untuk memberi bekal
            <strong>finansial</strong> masa depan yang kokoh.
        </p>
        <div class="footer-form">
            <p>Tabungan Untuk Masa depan Yang Cerah</p>
        </div>
    </div>
</body>

</html>