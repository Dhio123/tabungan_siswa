<?php
include './layout/header.php';
include 'koneksi.php';
$nisn = $_POST['nisn'];

$no = 1;
$jumlah_awal = 0;
$result = $kon->query("SELECT nama FROM siswa WHERE nisn=$nisn");
$nama_siswa = $result->fetch_assoc();
$query = mysqli_query($kon, "SELECT * FROM tabungan left join siswa on siswa.nisn=tabungan.nisn WHERE siswa.nisn=$nisn");

?>

<div class="container">
    <div class="welcome">
        <div class="welcome-message">
            <p>Welcome -</p>
            <p class="name"><?php echo $_SESSION['nama']; ?></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M9 17C9 17 16 18 19 21H20C20.5523 21 21 20.5523 21 20V13.937C21.8626 13.715 22.5 12.9319 22.5 12C22.5 11.0681 21.8626 10.285 21 10.063V4C21 3.44772 20.5523 3 20 3H19C16 6 9 7 9 7H5C3.89543 7 3 7.89543 3 9V15C3 16.1046 3.89543 17 5 17H6L7 22H9V17ZM11 8.6612C11.6833 8.5146 12.5275 8.31193 13.4393 8.04373C15.1175 7.55014 17.25 6.77262 19 5.57458V18.4254C17.25 17.2274 15.1175 16.4499 13.4393 15.9563C12.5275 15.6881 11.6833 15.4854 11 15.3388V8.6612ZM5 9H9V15H5V9Z"
                fill="rgba(255,255,255,1)"></path>
        </svg>
    </div>
    <div class="table-container">
        <div class="table-title">
            <h3><?php echo $nama_siswa['nama']; ?></h3>
        </div>
        <table cellspacing=0>
            <thead>
                <tr>
                    <th>#</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?php  echo $no ?></td>
                    <td><?php  echo $data['nisn']?></td>
                    <td><?php  echo $data['nama']?></td>
                    <td><?php  echo get_rupiah($data['jumlah']) ?></td>
                    <td><?php  echo $data['tgl']?></td>
                </tr>
                <?php $jumlah_awal =  $jumlah_awal + $data['jumlah'];
                    $no++; ?>
                <?php endwhile; ?>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th><b>Total</b></th>
                        <th><?php  echo get_rupiah($jumlah_awal) ?></th>
                        <th></th>
                    </tr>
                </thead>
            </tbody>
        </table>
        <a href="lihat_tabungan.php" class="btn-back">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z">
                </path>
            </svg>
            <span>
                Kembali
            </span>
        </a>
    </div>
</div>

<?php
include './layout/footer.php';
?>