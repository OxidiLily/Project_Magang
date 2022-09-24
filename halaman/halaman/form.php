
  <form action="database/input.php" method="POST">
  <div class="form-group">
    <label for="Kegiatan">Kegiatan</label>
    <input type="text" class="form-control" id="Kegiatan" placeholder="Kegiatan">
  </div>

  <div class="row">
    <div class="col">
      <label for="Tanggal">Tanggal</label>
      <input type="date" class="form-control" id="Tanggal" min="2000-01-02" placeholder="">
    </div>

    <div class="col">
      <label for="Jam">Jam Pelaksanaan</label>
      <input type="time" class="form-control" id="JamPelaksanaan" placeholder="Jam Kegiatan">
    </div>
  </div><br>


  <div class="row">
    <div class="col">
      <label for="Tempat">Tempat</label>
      <input type="text" class="form-control" id="Tempat" placeholder="Tempat">
    </div>

    <div class="col">
      <label for="Penanggung Jawab">Penanggung Jawab</label>
      <input type="text" class="form-control" id="Penanggung_Jawab" placeholder="Penanggung Jawab">
    </div>
  </div><br>

  <div class="form-group">
    <label for="Keterangan">Keterangan</label>
    <textarea class="form-control" id="Keterangan" rows="3"></textarea>
  </div>
</form>