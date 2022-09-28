<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="../../js/sidebar.js"></script>
<script src="../../js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<table id="" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Jumlah KTP</th>
                <th>Jumlah KK</th>
                <th>Jumlah Surat Kematian</th>
                <th>Jumlah Akta</th>
                <th>Jumlah KIA</th>
                <th>Jumlah Surat Pindah</th>
                <th>Daerah</th>
                <th>Tanggal Input</th>
            </tr>
        </thead>
            
        <tbody>
            <?php
                include "../../kueri/koneksi.php";
                $sql = mysqli_query($konek, "SELECT * FROM statistik");
                $no = 1;
                if(mysqli_num_rows($sql)>0){
                    while($row = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['ktp']; ?></td>
                <td><?php echo $row['kartu_keluarga']; ?></td>
                <td><?php echo $row['surat_kematian']; ?></td>
                <td><?php echo $row['akta_kelahiran']; ?></td>
                <td><?php echo $row['kia']; ?></td>
                <td><?php echo $row['surat_pindah']; ?></td>
                <td><?php echo $row['asal']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
            </tr>
            <?php 
                } 
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Jumlah KTP</th>
                <th>Jumlah KK</th>
                <th>Jumlah Surat Kematian</th>
                <th>Jumlah Akta</th>
                <th>Jumlah KIA</th>
                <th>Jumlah Surat Pindah</th>
                <th>Daerah</th>
                <th>Tanggal Input</th>
            </tr>
        </tfoot>
</table>
</body>
</html> 
