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
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp/Telp</th>
                        <th scope="col">Jumlah Peserta</th>
                        <th scope="col">Jumlah Hari</th>
                        <th scope="col">Akomodasi</th>
                        <th scope="col">Transportasi</th>
                        <th scope="col">Makanan</th>
                        <th scope="col">Harga Paket</th>
                        <th scope="col">Total Tagihan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>08123456789</td>
                        <td>5</td>
                        <td>3</td>
                        <td>Hotel Bintang 3</td>
                        <td>Bus</td>
                        <td>Full Board</td>
                        <td>Rp 1.000.000</td>
                        <td>Rp 5.000.000</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Ubah</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
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