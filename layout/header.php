 <?php
    session_start();
if ($_SESSION['login'] != true) {
    echo "<script>window.location = './login.php';</script>";
}

$route = $_SERVER['REQUEST_URI'];
$route = trim(str_replace('/tabungansiswa','',$route)); 

?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/instemplate.css">
     <link rel="stylesheet" href="./css/global.css">
     <title>Aplikasi Tabungan - indonetsource</title>
 </head>

 <body>
     <nav class="navbar">
         <div class="brand">
             <h3>Mari Menabung</h3>
         </div>
         <div class="left-nav-content">
             <a class="<?php print($route == '/data_siswa.php') ? 'active' : '' ?>
                 " href="data_siswa.php">Siswa</a>
             <a class="<?php print($route == '/data_tabungan.php') ? 'active' : '' ?>
                 " href="data_tabungan.php">Tabungan</a>
             <a class="<?php print($route == '/lihat_tabungan.php' or $route == '/detail_tabungan.php') ? 'active' : '' ?>
                 " href="lihat_tabungan.php">Lihat Tabungan</a>
             </ul>
         </div>
         <div class="right-nav-content">
             <a href="./proses/logout.php">
                 <svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path
                         d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                     </path>
                 </svg>
             </a>
         </div>
     </nav>
     <div class="content">