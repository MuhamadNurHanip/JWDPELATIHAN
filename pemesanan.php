<?php
// Sertakan bagian header dari layouts
include 'layouts/header.php';
?>

<div class="container mt-3">
<div class="row mt-3">
    <div class="col-12 col-md-9">
        <h2>Form Pemesanan Paket Wisata</h2>
        <form action="" method="" autocomplete="">
            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control form-Control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="paket" class="form-label">Pilih Paket</label>
                    <select class="form-select" aria-label="Default select example">
                        <!-- <option selected>Pilih Paket</option> -->
                        <option value="paket1">Paket 1</option>
                        <option value="paket2">Paket 2</option>
                        <option value="paket3">Paket 3</option>
                        <option value="paket4">Paket 4</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="tgl-pesan" class="form-label">Tanggal Pesan</label>
                    <input type="date" class="form-control form-Control-sm" id="tgl-pesan" name="tgl-pesan" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="durasi" class="form-label">Durasi</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-Control-sm" id="durasi" name="durasi" aria-describedby="bassic-addon2">
                        <span class="input-group-text" id="bassic-addon2">hari</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12 col-md-3">
                    <label for="jml-peserta" class="form-label">Jumlah Peserta</label>
                    <div class="input-group input-group-sm">
                        <input type="number" class="form-control form-Control-sm" id="jml-peserta" name="jml-peserta" aria-describedby="bassic-addon2">
                        <span class="input-group-text" id="bassic-addon2">orang</span>
                    </div>
                </div>

                <div class="mb-3 col-12 col-md-9">
                    <label for="nama-pemesan" class="form-label">Pelayanan Paket Perjalanan</label>
                    <div class="d-lg-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Y" id="penginapan" onclick="handlePenginapan(this)">
                            <label class="form-check-label" for="penginapan">Penginapan (Rp. 1.000.000)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Y" id="transportasi" onclick="handleTransportasi(this)">
                            <label class="form-check-label" for="transportasi">Transportasi (Rp. 1.000.000)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Y" id="makanan" onclick="handleMakanan(this)">
                            <label class="form-check-label" for="makanan">Makanan (Rp. 1.000.000)</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12 col-md-4">
                    <label for="harga-paket" class="form-label">Harga Paket</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon2">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="harga-paket" name="harga-paket" aria-describedby="bassic-addon2">
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="harga-layanan" class="form-label">Harga Layanan</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon2">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="harga-layanan" name="harga-layanan" aria-describedby="bassic-addon2">
                    </div>
                </div>

                <div class="mb-3 col-12 col-md-4">
                    <label for="total-pembayaran" class="form-label">Total Pembayaran</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon2">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="total-pembayaran" name="total-pembayaran" aria-describedby="bassic-addon2">
                    </div>
                </div>

            </div>

            <input type="submit" class="btn btn-sm btn-primary" value="simpan">
            <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
            <button type="reset" class="btn btn-sm btn-danger" value="reset">Reset</button>

        </form>
    </div>
    <div class="col-12 col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Paket Wisata 1</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div> <br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Paket Wisata 2</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/x1i6LvJg9VY?si=_xEav6i5kCzdFAm-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
// Sertakan bagian footer dari layouts
include 'layouts/footer.php';
?>