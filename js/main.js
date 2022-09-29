$(document).ready(function () {
  $('table.display').DataTable();
});

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

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