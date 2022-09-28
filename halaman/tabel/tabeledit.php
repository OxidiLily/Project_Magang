<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard_admin.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="../../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

<table id="example" class="display" style="width:100%">
    <?php 
        include "../../kueri/koneksi.php";
        $sql = mysqli_query($konek, "SELECT * FROM agenda");
            
    ?>
        <thead>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Jam Pelaksanaan</th>
                <th>Tempat</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../../kueri/koneksi.php";
                $sql = mysqli_query($konek, "SELECT * FROM agenda ORDER BY tanggal");
                $no = 1;
                if(mysqli_num_rows($sql)>0){
                    while($row = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['kegiatan']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktu']; ?></td>
                <td><?php echo $row['tempat']; ?></td>
                <td><?php echo $row['tanggung_jawab']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td>
                    <a data-toggle="modal" data-target="#Edit<?php echo $row['id']; ?>" class="btn btn-info" 
                    href="#Edit<?php echo $row['id']; ?>">Edit</a>
                    <a data-toggle="modal" data-target="#Hapus<?php echo $row['id']; ?>" class="btn btn-danger" 
                    href="#Hapus<?php echo $row['id']; ?>">Hapus</a>
                </td>
                </tr>
                <?php 
        } }
         ?>
            </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Jam Pelaksanaan</th>
                <th>Tempat</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
</table>
<!-- Modal/PopUp untuk edit -->
<?php 
include "../../kueri/koneksi.php";
$qry = mysqli_query($konek, "SELECT * FROM agenda ORDER BY tanggal");
if(mysqli_num_rows($qry)>0){
    while($row = mysqli_fetch_array($qry)){ 
?>
  <!-- Modal -->
  <div class="modal fade" id="Edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Edit<?php echo $row['id']; ?>">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../kueri/update.php" method="POST">
          <div class="form-group">
            <label for="Kegiatan">Kegiatan</label>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" class="form-control" id="Kegiatan" name="kegiatan" value="<?php echo $row['kegiatan']; ?>">
          </div>

          <div class="row">
            <div class="col">
              <label for="Tanggal">Tanggal</label>
              <input type="date" class="form-control" id="Tanggal" min="2000-01-02" name="tanggal" value="<?php echo $row['tanggal']; ?>">
            </div>

            <div class="col">
              <label for="Jam">Jam Pelaksanaan</label>
              <input type="time" class="form-control" id="JamPelaksanaan" name="jam" value="<?php echo $row['waktu']; ?>">
            </div>
          </div><br>

          <div class="row">
            <div class="col">
              <label for="Tempat">Tempat</label>
              <input type="text" class="form-control" id="Tempat" name="tempat" value="<?php echo $row['tempat']; ?>">
            </div>

            <div class="col">
              <label for="Penanggung Jawab">Penanggung Jawab</label>
              <input type="text" class="form-control" id="Penanggung_Jawab" name="tanggung_jawab" value="<?php echo $row['tanggung_jawab']; ?>">
            </div>
          </div><br>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <textarea class="form-control" id="Keterangan" rows="3" name="keterangan"><?php echo $row['keterangan']; ?></textarea>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="updatedata">Simpan Perubahan</button>
          </div>

        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<?php } } ?>
<!-- Modal/PopUp untuk hapus data -->
<?php 
include "../../kueri/koneksi.php";
$qry = mysqli_query($konek, "SELECT * FROM agenda ORDER BY tanggal");
if(mysqli_num_rows($qry)>0){
    while($row = mysqli_fetch_array($qry)){ 
?>
<div class="modal fade" id="Hapus<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form action="../../kueri/hapus.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="Hapus<?php echo $row['id']; ?>">Hapus Data Kegiatan "<?php echo $row['kegiatan']; ?>"</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus Data ini?
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="hapusdata">Hapus</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php } } ?>

</body>
</html> 
