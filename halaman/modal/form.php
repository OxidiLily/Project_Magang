
  <form action="../../kueri/agenda/input.php" method="POST">
  <div class="form-group">
    <label for="Kegiatan">Kegiatan</label>
    <input type="text" class="form-control" id="Kegiatan" placeholder="Kegiatan" name="kegiatan">
  </div>

  <div class="row">
    <div class="col">
      <label for="Tanggal">Tanggal</label>
      <input type="date" class="form-control" id="Tanggal" min="2000-01-02" placeholder="" name="tanggal">
    </div>

    <div class="col">
      <label for="Jam">Jam Pelaksanaan</label>
      <input type="time" class="form-control" id="JamPelaksanaan" placeholder="Jam Kegiatan" name="jam">
    </div>
  </div><br>


  <div class="row">
    <div class="col">
      <label for="Tempat">Tempat</label>
      <input type="text" class="form-control" id="Tempat" placeholder="Tempat" name="tempat">
    </div>

    <div class="col">
      <label for="Penanggung Jawab">Penanggung Jawab</label>
      <input type="text" class="form-control" id="Penanggung_Jawab" placeholder="Penanggung Jawab" name="tanggung_jawab">
    </div>
  </div><br>

  <div class="form-group">
    <label for="Keterangan">Keterangan</label>
    <textarea class="form-control" id="Keterangan" rows="3" name="keterangan"></textarea>
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="tambahdata">Tambah Data</button>
  </div>
</form>