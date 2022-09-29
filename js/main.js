$(document).ready(function () {
  $('table.display').DataTable();
});

// Memilih asal tempat untuk statistik
function selectDaerah(){
  var lokasi = document.getElementById("Lokasi");
  document.getElementById("hasil_pilihLokasi").value = lokasi.options[lokasi.selectedIndex].text;
}

// fungsi untuk menampilkan hasil chart dari pencarian
function ShowChart(Chart){
  var i, canva;
  // ambil class canvaChart untuk disembunyikan
  canva = document.getElementsByClassName("canvaChart");
  for (i = 0; i < canva.length; i++) {
    canva[i].style.display = "none";
  }
  // menampilkan chart
  document.getElementById(Chart).style.display = "block";
}