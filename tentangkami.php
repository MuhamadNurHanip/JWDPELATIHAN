<?php
// Sertakan bagian header dari layouts
include 'layouts/header.php';
include("./lib/file_util.php");
?>

<br>
<div class="container mt-3 text-center">
    <div class="row mt-3">
        <h3>Panduan Masuk ke Wisata Banyuwangi</h3>
        <iframe width="1115" height="450" src="https://www.youtube.com/embed/zzJcADNiNhg?si=BCMfna8NDIT-3R3L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <p style="text-align: justify">
            <?php
            $fileObject = new FileUtil("sejarah.txt");
            $str_data = $fileObject->readTxtFile();
            echo $str_data;
            ?>
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php
// Sertakan bagian footer dari layouts
include 'layouts/footer.php';
?>