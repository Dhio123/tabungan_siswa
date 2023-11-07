<?php
include './layout/header.php';
include 'koneksi.php';

$query = mysqli_query($kon, 'SELECT * FROM siswa');
$query_tabungan = mysqli_query($kon, 'SELECT * FROM tabungan left join siswa on siswa.nisn=tabungan.nisn ORDER BY id_tabungan DESC');
$no_tabungan = 1;

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
            <h4>Tambah Data Tabungan Siswa</h4>
        </div>
        <form action="./proses/insert_tabungan.php" method="post">
            <table>
                <tr>
                    <td>NISN</td>
                    <td>
                        <select name="nisn" required>
                            <option value=""></option>
                            <?php while ($data = mysqli_fetch_array($query)) : ?>
                            <option value="<?php echo $data['nisn']?>">
                                <?php echo $data['nisn'] . " - " . $data['nama']?>
                            </option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>
                        <input type="date" name="tgl">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="table-container">
        <div class="table-title">
            <h4>Data Tabungan Siswa</h4>
        </div>
        <table cellspacing=0>
            <thead>
                <tr>
                    <th>#</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($query_tabungan)) : ?>
                <tr>
                    <td><?php  echo $no_tabungan ?></td>
                    <td><?php  echo $data['nisn']?></td>
                    <td><?php  echo $data['nama']?></td>
                    <td><?php  echo get_rupiah($data['jumlah']) ?></td>
                    <td><?php  echo $data['tgl']?></td>
                    <td>
                        <a class="btn-delete"
                            href="./proses/delete_tabungan.php?id_tabungan=<?php  echo $data['id_tabungan']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"
                                    fill="rgba(255,255,255,1)"></path>
                            </svg>
                        </a>
                    </td>
                    <?php $no_tabungan++; ?>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include './layout/footer.php';
?>