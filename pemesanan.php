<?php
// Sertakan bagian header dari layouts
include 'layouts/header.php';
?>

<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h2>Form Pemesanan Paket Wisata</h2>
            <form action="validasisimpan.php" method="post" autocomplete="off">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-Control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-paket" class="form-label">Pilih Paket</label>
                        <select class="form-select" aria-label="Default select example" id="nama-paket" name="nama-paket" onchange="updatehargaPaket()">
                            <!-- <option selected>Pilih Paket</option> -->
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
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
                            <input type="number" class="form-control form-Control-sm" id="jumlah-orang" name="jumlah-orang" aria-describedby="bassic-addon2">
                            <span class="input-group-text" id="bassic-addon2">orang</span>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-9">
                        <label for="nama-pemesan" class="form-label">Pelayanan Paket Perjalanan</label>
                        <div class="d-lg-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="penginapan" value="Y" id="penginapan" onclick="handlePenginapan(this)">
                                <label class="form-check-label" for="penginapan">Penginapan (Rp. 300.000)</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi" value="Y" id="transportasi" onclick="handleTransportasi(this)">
                                <label class="form-check-label" for="transportasi">Transportasi (Rp. 200.000)</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="makanan" value="Y" id="makanan" onclick="handleMakanan(this)">
                                <label class="form-check-label" for="makanan">Makanan (Rp. 150.000)</label>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    Penginapan=false;
    Transportasi=false;
    makanan=false;
    function updatehargaPaket() {
        var nilai = document.getElementById("nama-paket").value;
        var ElemenHargapaket = document.getElementById("harga-paket");
        // console.log(nilai);
        // alert(nilai);
        let harga = 0;
        if (nilai == "1") {
            harga = 500000;
        } else if (nilai == "2") {
            harga = 750000
        } else if (nilai == "3") {
            harga = 1000000
        } else if (nilai == "4") {
            harga = 1250000
        }
        console.log(nilai);
        // alert(harga);
        ElemenHargapaket.value=harga;
    }

    function handlePenginapan(cb){
        Penginapan=cb.checked;
        hl=document.getElementById("harga-layanan");
        hl.value=hargalayanan();
    }

    function handleTransportasi(cb){
        Transportasi=cb.checked;
        hl=document.getElementById("harga-layanan");
        hl.value=hargalayanan();
    }

    function handleMakanan(cb){
        makanan=cb.checked;
        hl=document.getElementById("harga-layanan");
        hl.value=hargalayanan();
    }

    function hargalayanan(){
        totallayanan=0;
        if(Penginapan){
            totallayanan=totallayanan+300000;
        }if(Transportasi){
            totallayanan=totallayanan+200000;
        }if(makanan){
            totallayanan=totallayanan+150000;
        }
        return totallayanan;
    }

    function hitung(){
        var hari = Number(document.getElementById("durasi").value);
       var jumlahPeserta = Number(document.getElementById("jumlah-orang").value);
       var hargaPaket = Number(document.getElementById("harga-paket").value);
       var hargalayanan = Number(document.getElementById("harga-layanan").value);

        hargaPaket = hargaPaket || 0;
        jumlahPeserta = jumlahPeserta || 0;
        hargalayanan = hargalayanan || 0;
        hari = hari || 0;

       var jumlahTagihan = ( hargaPaket * jumlahPeserta) + (hargalayanan * jumlahPeserta * hari); //harga paket + harga layanan
       document.getElementById("total-pembayaran").value = jumlahTagihan;
    }
</script>
<?php
// Sertakan bagian footer dari layouts
include 'layouts/footer.php';
?>