<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'jwd_pelatihan';

$koneksi = new mysqli($host, $user, $password, $database);

$query = "SELECT * FROM paket_wisata";
// $hasil = mysqli_query($koneksi,$query);
$hasil = $koneksi->query($query);

// print_r($hasil);
?>

<?php
// Sertakan bagian header dari layouts
include 'layouts/header.php';
?>
<div class="container mt-3">
    <div class="row mt-3">
        <!-- <div class="col-12 col-md-9"> -->
        <h3>Halaman Rekap Data</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Tanggal</th>
                    <th>Jumlah Hari</th>
                    <th>Jumlah Peserta</th>
                    <th>Penginapan</th>
                    <th>Transportasi</th>
                    <th>Makanan</th>
                    <th>Total Pembayaran</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <?php
                    $count = 0;
                    if ($hasil->num_rows > 0) {
                        while ($row = $hasil->fetch_assoc()) {
                            $count++;
                            echo "<tr>";
                            echo  "<td>$count</td>";
                            // echo  "<td>" . $row['id'] . "</td>";
                            echo  "<td>" . $row['nama'] . "</td>";
                            echo  "<td>" . $row['paket'] . "</td>";
                            echo  "<td>" . $row['tgl_pesan'] . "</td>";
                            echo  "<td>" . $row['durasi'] . "</td>";
                            echo  "<td>" . $row['jml_orang'] . "</td>";
                            echo  "<td>" . $row['penginapan'] . "</td>";
                            echo  "<td>" . $row['transportasi'] . "</td>";
                            echo  "<td>" . $row['makanan'] . "</td>";
                            echo  "<td>" . $row['total'] . "</td>";
                            echo  "<td>";
                            // echo "<a href='modifikasi.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Ubah</a>";
                            // echo "<a href='hapus.php?id=" . $row['id'] . "' class='ms-3 btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin akan hapus ?\")'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <!-- <td>
                            <button class="btn btn-warning btn-sm">Ubah</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td> -->
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>
<!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php
// Sertakan bagian footer dari layouts
include 'layouts/footer.php';
?>