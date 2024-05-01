<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'jwd_pelatihan';

$koneksi = new mysqli($host, $user, $password, $database);

$nama = $_POST["nama-pemesan"];
$paket = $_POST["nama-paket"];
$tglpesan = $_POST["tgl-pesan"];
$durasi = $_POST["durasi"];
$jumlahpeserta = $_POST["jumlah-orang"];
$hargalayanan = $_POST['harga-layanan'];
$hargapaket = $_POST['harga-paket'];
$penginapan = isset($_POST['penginapan']) ? "Y" : "N";
$makanan = isset($_POST['makanan']) ? "Y" : "N";
$transportasi = isset($_POST['transportasi']) ? "Y" : "N";
$jumlahTagihan = $_POST['total-pembayaran'];

$query = "INSERT INTO paket_wisata (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, makanan, total) 
          VALUES ('$nama', '$paket', '$tglpesan', $durasi, $jumlahpeserta, '$penginapan', '$transportasi', '$makanan', $jumlahTagihan)";

$sukses = mysqli_query($koneksi, $query);
?>


<?php
include 'layouts/header.php';
?>
<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Pesanan anda berhasil ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>

            <div class="card">
                <div class="card-header" style="text-align: center">
                    RANGKUMAN RESERVASI PAKET WISATA
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama; ?></td>
                        </tr>

                        <!-- Pilih Paket -->
                        <tr>
                            <td>Pilih Paket</td>
                            <td>:</td>
                            <td><?php echo $paket; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pesan</td>
                            <td>:</td>
                            <td><?php echo $tglpesan; ?></td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td>
                                <?php echo $durasi; ?>
                                Hari
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Peserta</td>
                            <td>:</td>
                            <td>
                                <?php echo $jumlahpeserta; ?>
                                Orang
                            </td>
                        </tr>

                        <tr>
                            <td>Peayanan Paket</td>
                            <td>:</td>
                            <?php
                            $layananPaket = "";

                            if ($penginapan == "Y") {
                                $layananPaket = $layananPaket . "Penginapan, ";
                            }
                            if ($transportasi == "Y") {
                                $layananPaket = $layananPaket . "Transportasi, ";
                            }
                            if ($makanan == "Y") {
                                $layananPaket = $layananPaket . "Makanan, ";
                            }

                            ?>
                            <td><?php echo $layananPaket; ?></td>
                        </tr>

                        <tr>
                            <td>Harga Paket</td>
                            <td>:</td>
                            <td><?php echo $hargapaket; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Layanan</td>
                            <td>:</td>
                            <td><?php echo $hargalayanan; ?></td>
                        </tr>

                        <tr>
                            <td>Total Pembayaran</td>
                            <td>:</td>
                            <td><?php echo $jumlahTagihan; ?></td>
                        </tr>
                    </table>
                </div>


            </div>
            <!-- PRINT -->
            <br>

            <!-- PILIHAN -->
            <div class="card text-center">
                <span>Pesan Lagi?</span>
                <row class="">
                    <a href="pemesanan.php" class="btn btn-primary">Ya</a>
                    <a href="index.php" class="btn btn-danger">Tidak</a>
                </row>

            </div><br>

        </div>

        <div class="col-12 col-md-3">
            <!-- Paket Wisata 1 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 1</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <!-- <iframe src="https://www.youtube.com/embed/7uWymLYgdmM?si=yVmnNFLL6CIPO_Bl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
            <!-- Paket Wisata 2 -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 2</h5>
                    <div class="text-center ratio ratio-16x9">
                        <!-- <iframe src="https://www.youtube.com/embed/7uWymLYgdmM?si=yVmnNFLL6CIPO_Bl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// Sertakan bagian header dari layouts
include 'layouts/footer.php';
?>