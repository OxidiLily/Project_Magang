<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<?php 
include "../koneksi.php";

if(isset($_POST['tambah_rekap'])){
    $asal = $_POST['asal'];
    $tanggal = $_POST['tanggal'];
    $ktp = $_POST['ktp'];
    $kartu_keluarga = $_POST['kartu_keluarga'];
    $surat_kematian = $_POST['surat_kematian'];
    $akta_kelahiran = $_POST['akta_kelahiran'];
    $kia = $_POST['kia'];
    $surat_pindah = $_POST['surat_pindah'];

    $query = mysqli_query($konek, "INSERT INTO statistik(asal,tanggal,ktp,kartu_keluarga,surat_kematian,akta_kelahiran,kia,surat_pindah)
        VALUES('$asal','$tanggal','$ktp','$kartu_keluarga','$surat_kematian','$akta_kelahiran','$kia','$surat_pindah') ");
    if($query){
        echo '
        <div class="alert alert-success" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Sukses !!</strong> Berhasil menambahkan data
        <div id="msg"></div>
        </div>';
    }else{

        echo '
        <div class="alert alert-danger" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Gagal !!</strong> Gagal menambahkan data
        <div id="msg"></div>
        </div>';

    }
}
?>

<script>
    var url = "../../halaman/statistik/input_statistik.php"; // membuat url tujuan
    var count = 5; // membuat hitungan kedalam detik
    function countDown() {
    if (count > 0) {
        count--;
        var waktu = count + 1;
        $('#msg').html('Kamu akan dialihkan menuju ke Halaman Input Data dalam hitungan: ' + waktu + ' detik.'+'<i>');
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
       }
    }
        countDown();
</script>