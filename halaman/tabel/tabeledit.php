<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/sidebar.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

<table id="example" class="display" style="width:100%">
    <?php 
        include "../koneksi/koneksi.php";
        $sql = mysqli_query($konek, "SELECT * FROM agenda");
        $no = 1;
        if(mysqli_num_rows($sql)>0){
            while($row = mysqli_fetch_array($sql)){
                
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
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['kegiatan']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktu']; ?></td>
                <td><?php echo $row['tempat']; ?></td>
                <td><?php echo $row['tanggung_jawab']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td>
                    <button data-toggle="modal" data-target="#EditData" type="button" class="btn btn-info">Edit</button>
                    <?php include "../halaman/command/editdatatabel.php";?>
                    
                    <button data-toggle="modal" data-target="#HapusDataTabel" type="button" class="btn btn-danger">Hapus</button>
                    <?php include "../halaman/command/hapusdatatabel.php";?>
                </td>
            </tr>
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
    <?php } } ?>
</table>
</body>
</html> 
