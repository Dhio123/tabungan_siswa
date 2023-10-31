<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/instemplate.css">
    <title>Login - Tabungan Siswa</title>
</head>

<body>
    <div class="container-login">
    <div class="image">
        <img src="gambar/celengan_ayam.png" alt="">
    </div>
    <p style="width: 400px; text-align: center; margin-top: -10px;">Tabungan Siswa</p>

    <h1>Selamat Datang</h1>
    <form style=" margin-top: -20px;" class="form-ins form-login" action="./proses/cek_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input placeholder="username" type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input placeholder="password" type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
    <p style="width: 400px; text-align: center; margin-top: -10px;">Tabungan Untuk Masa depan Yang Cerah</p>

    </div>
</body>

</html>