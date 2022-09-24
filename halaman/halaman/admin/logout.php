<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session

 
// mengalihkan halaman sambil mengirim pesan logout
echo '<div id="msg"></div>';

?>


<script>
    var url = "../halaman/admin/inputdata.php"; // membuat url tujuan
    var count = 1; // membuat hitungan kedalam detik
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