<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'jwd_pelatihan';

$koneksi = new mysqli($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal dengan kode kesalahan: " . $koneksi->connect_errno;
    echo " dan pesan kesalahan: " . $koneksi->connect_error;
} else {
    echo "Koneksi berhasil!";
}

$nama = $_POST("nama-pemesan"); 
$paket = $_POST("nama-paket");
$tglpesan = $_POST("tgl-pesan");
$durasi = $_POST("durasi");
$jumlahpeserta = $_POST("jumlah-orang");

// $makanan = $_POST("makanan");
// $transportasi = $_POST("transportasi");

// print_r($_POST);

$penginapan = isset($_POST['penginapan'])?"Y":"N";
$makanan = isset($_POST['makanan'])?"Y":"N";
$transportasi = isset($_POST['transportasi'])?"Y":"N";
$jumlahTagihan = $_POST['total-pembayaran'];

$query="INSERT INTO 
paket_wisata (nama, tgl_pesan, durasi, jml_orang, penginapan, transportasi, makanan, harga_paket, harga_layanan, total) 
VALUES ($nama, $tglpesan, $durasi, $jumlahpeserta, $penginapana, $transportasi, $makanan, $jumlahtagihan)";

// if(isset($_POST['penginapan'])){
//     $penginapan="Y";
// }



?>


<?php
include 'layouts/header.php';
?>
<div class="container mt-3">
<div class="row mt-3">
            <div class="col-12 col-md-9">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> Pesanan Anda Berhasil Di Buat.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>      

                
                <!-- PRINT -->
                <div class="card">
                    <div class="card-header text-center">
                        BUKTI PEMESANAN PAKET WISATA
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>M. Nur Hanif</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta</td>
                                <td>4 Orang</td>
                            </tr>
                            <tr>
                                <td>Waktu Perjalan</td>
                                <td>5 Hari</td>
                            </tr>
                            <tr>
                                <td>Layanan Paket</td>
                                <td>Penginapan, Transportasi</td>
                            </tr> 
                            <tr>
                                <td>Pilihan Paket</td>
                                <td>Paket 1</td>
                            </tr>
                            <tr>
                                <td>Harga Layanan</td>
                                <td>Rp. 1.000.000</td>
                            </tr>
                            <tr>
                                <td>Harga Paket</td>
                                <td>Rp. 1.000.000</td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td>Rp. 2.000.000</td>
                            </tr> 
                        </table>

                    </div>

                </div> <br>

                <!-- PILIHAN -->
                <div class="card text-center">
                    <span>Pesan Lagi?</span>
                    <row>
                        <a href="pemesanan.php" class="btn btn-primary">Ya</a>
                        <a href="index.php" class="btn btn-danger">Tidak</a>
                    </row>

                </div>

            </div>

            <div class="col-12 col-md-3">
                <!-- Paket Wisata 1 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata 1</h5>
                        <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
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
                                <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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