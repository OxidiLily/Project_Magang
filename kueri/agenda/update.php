<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php 
include "../koneksi.php";
if(isset($_POST['updatedata'])){
    $id = $_POST['id'];
    $kegiatan = $_POST['kegiatan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tempat = $_POST['tempat'];
    $tanggung_jawab = $_POST['tanggung_jawab'];
    $keterangan = $_POST['keterangan'];
    
    $sql = "UPDATE agenda SET kegiatan='$kegiatan', tanggal='$tanggal', waktu='$jam', tanggung_jawab='$tanggung_jawab',
            keterangan='$keterangan' WHERE id='$id'";
    if(mysqli_query($konek,$sql)){
        
        echo '
        <div class="alert alert-success" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Sukses !!</strong> Berhasil merubah data
        <div id="msg"></div>
        </div>';
    }else{
        echo '
        <div class="alert alert-danger" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Gagal !!</strong> Gagal merubah data
        <div id="msg"></div>
        </div>';

    }
}
?>
<script>
    var url = "../../halaman/agenda/inputdata.php"; // membuat url tujuan
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